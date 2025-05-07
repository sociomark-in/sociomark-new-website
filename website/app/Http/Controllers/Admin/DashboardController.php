<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\outboundLead;
use Illuminate\Support\Facades\Log;
use App\Models\Visit;

class DashboardController extends Controller
{

    public function index()
    {
        $contact_leads = Contact::get();
        $out_bound_lead = outboundLead::get();
        $now = Carbon::now();
    
        // ----- INBOUND (Contact) LEADS -----
        $currentMonthLeadCount = Contact::whereMonth('created_at', $now->month)
            ->whereYear('created_at', $now->year)
            ->count();
    
        $lastMonth = $now->copy()->subMonth();
        $lastMonthLeadCount = Contact::whereMonth('created_at', $lastMonth->month)
            ->whereYear('created_at', $lastMonth->year)
            ->count();
    
        $change = 0;
        if ($lastMonthLeadCount > 0) {
            $change = (($currentMonthLeadCount - $lastMonthLeadCount) / $lastMonthLeadCount) * 100;
        }
    
        // ----- OUTBOUND LEADS -----
        $currentMonthInLeadCount = outboundLead::whereMonth('created_at', $now->month)
            ->whereYear('created_at', $now->year)
            ->count();
    
        $lastMonthOutbound = $now->copy()->subMonth(); // different variable to avoid confusion
        $lastMonthinLeadCount = outboundLead::whereMonth('created_at', $lastMonthOutbound->month)
            ->whereYear('created_at', $lastMonthOutbound->year)
            ->count();
    
        $inchange = 0;
        if ($lastMonthinLeadCount > 0) {
            $inchange = (($currentMonthInLeadCount - $lastMonthinLeadCount) / $lastMonthinLeadCount) * 100;
        }
    
        // ----- VISITS -----
        $visitsToday = Visit::whereDate('visited_at', Carbon::today())->count();
    
        return view("admin/Pages/Home/Dashboard", compact(
            'contact_leads',
            'currentMonthLeadCount',
            'change',
            'visitsToday',
            'out_bound_lead',
            'inchange',
            'currentMonthInLeadCount'
        ));
    }
    
    public function getLeadsChartData(Request $request)
    {
        try {
            $type = $request->input('type', 'month'); // 'day', 'week', 'month', 'year'

            switch ($type) {
                case 'day':
                    $leads = DB::table('Contacts')
                        ->select(DB::raw('DATE(created_at) as period'), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw('DATE(created_at)'))
                        ->orderBy('period')
                        ->get();
                    break;

                case 'week':
                    $leads = DB::table('Contacts')
                        ->select(DB::raw('YEARWEEK(created_at, 1) as period'), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw('YEARWEEK(created_at, 1)'))
                        ->orderBy('period')
                        ->get();
                    break;

                case 'year':
                    $leads = DB::table('Contacts')
                        ->select(DB::raw('YEAR(created_at) as period'), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw('YEAR(created_at)'))
                        ->orderBy('period')
                        ->get();
                    break;

                case 'month':
                default:
                    $leads = DB::table('Contacts')
                        ->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') as period"), DB::raw('COUNT(*) as total'))
                        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))
                        ->orderBy('period')
                        ->get();
                    break;
            }

            // Log leads data to check the response before sending
            \Log::info('Leads Data:', $leads->toArray());

            // Return the leads data as JSON response
            return response()->json($leads);
        } catch (\Exception $e) {
            // Log the error to track issues
            \Log::error("Error in getLeadsChartData: " . $e->getMessage());

            // Respond with an error message
            return response()->json([
                'error' => 'An error occurred while fetching the leads data.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
