<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PopUpContact;
use Carbon\Carbon;

class ContatListController extends Controller
{
    public function graph(Request $request)
    {
        $month = $request->get('month', now()->format('Y-m'));
        $startOfMonth = Carbon::parse($month)->startOfMonth();
        $endOfMonth = Carbon::parse($month)->endOfMonth();

        // Graph data (daily)
        $leads = Contact::selectRaw("DATE(created_at) as date")
            ->selectRaw("SUM(CASE WHEN utm_source IN ('google','facebook','instagram','newsletter') THEN 1 ELSE 0 END) as ad_leads")
            ->selectRaw("SUM(CASE WHEN utm_source IS NULL OR utm_source NOT IN ('google','facebook','instagram','newsletter') THEN 1 ELSE 0 END) as organic_leads")
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // All Leads
        $contactLists = Contact::latest()->get();

        // Total counts of Organic Leads
        $totalOrganicLeads = Contact::where(function ($q) {
            $q->whereNull('utm_source')
                ->orWhereNotIn('utm_medium', ['cpc', 'paid', 'ppc', 'google', 'facebook', 'instagram', 'newsletter']);
        })->count();

        // Total counts of Ads Leads
        $totalAdLeads = Contact::whereNotNull('utm_source')
            ->whereIn('utm_source', ['google', 'facebook', 'instagram', 'newsletter'])
            ->count();

        // Monthly counts using organic Leads
        $totalOrganicLeadsThisMonth = Contact::where(function ($q) {
            $q->whereNull('utm_source')
                ->orWhereNotIn('utm_source', ['cpc', 'paid', 'ppc', 'google', 'facebook', 'instagram', 'newsletter']);
        })->whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

        // Monthly counts using Ads Leads
        $totalAdLeadsThisMonth = Contact::whereIn('utm_source', ['google', 'facebook', 'instagram', 'newsletter'])
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->count();

        // Pie chart data service  // list of all lead
        // $contactLists = Contact::whereBetween('created_at', [$startOfMonth, $endOfMonth])
        // ->latest()
        // ->get();

        // Service-wise leads in selected month
        $serviceCounts = Contact::selectRaw('service, COUNT(*) as count')
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->whereNotNull('service')
            ->groupBy('service')
            ->pluck('count', 'service');

        // status-wise leads in selected month    
        $knownStatuses = ['new', 'Hot', 'Warm', 'Cold', 'Qualified', 'Converted'];
        $allStatuses = ['new', 'Hot', 'Warm', 'Cold',  'Qualified', 'Converted', 'Unknown'];
        $statusWiseLeads = [];

        foreach ($allStatuses as $status) {
            if ($status === 'Unknown') {
                // Leads with NULL, empty, or unrecognized status
                $statusData = Contact::selectRaw("DATE(created_at) as date, COUNT(*) as count")
                    ->whereNotIn('status', $knownStatuses)
                    ->orWhereNull('status')
                    ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                    ->groupBy('date')
                    ->orderBy('date')
                    ->get()
                    ->pluck('count', 'date');
            } else {
                $statusData = Contact::selectRaw("DATE(created_at) as date, COUNT(*) as count")
                    ->where('status', $status)
                    ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                    ->groupBy('date')
                    ->orderBy('date')
                    ->get()
                    ->pluck('count', 'date');
            }

            // Fill missing dates with 0
            $allDates = collect();
            $current = $startOfMonth->copy();
            while ($current <= $endOfMonth) {
                $allDates->put($current->format('Y-m-d'), $statusData->get($current->format('Y-m-d'), 0));
                $current->addDay();
            }

            $statusWiseLeads[] = [
                'name' => ucfirst($status),
                'data' => array_values($allDates->toArray())
            ];
        }

        // Generate chart x-axis labels (e.g. 'May 01', 'May 02', etc.)
        $chartDates = [];
        $current = $startOfMonth->copy();
        while ($current <= $endOfMonth) {
            $chartDates[] = $current->format('M d');
            $current->addDay();
        }


        return view('admin/Pages/Contact/ContactList', compact(
            'contactLists',
            'leads',
            'totalOrganicLeads',
            'totalOrganicLeadsThisMonth',
            'totalAdLeads',
            'totalAdLeadsThisMonth',
            'serviceCounts',
            'statusWiseLeads',
            'chartDates'
        ));
    }

    public function editLead($id)
    {
        $lead = Contact::findOrFail($id);
        return view('admin/Pages/Contact/EditContactLead', compact('lead'));
    }
    public function updateLead(Request $request, $id)
    {
        $lead = Contact::findOrFail($id);

        $request->validate([
            'status' => 'required|in:New,Hot,Warm,Cold,Qualified,Converted',
        ]);

        $lead->update($request->only([
            'status',
        ]));

        return redirect()->route('contactList')->with('success', 'Lead updated successfully.');
    }
    // Delete blog
    public function deleteLead(Contact $lead)
    {
        $lead->delete();
        return redirect()->route('listLead')->with('success', 'Lead deleted successfully!');
    }
}
