<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Mail\EventReminderMail;
use Illuminate\Support\Facades\Mail;

class calenderController extends Controller
{
    public function calender()
    {
        return view('admin/Pages/calender/calender');
    }

    public function index()
    {
        // Return only the necessary fields
        return response()->json(
            Event::select('id', 'title', 'description', 'start')->get()
        );
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string',
    //         'description' => 'nullable|string',
    //         'start' => 'required|date',
    //     ]);

    //     // Create the event
    //     $event = Event::create($request->only(['title', 'description', 'start']));

    //     // Send email to the business analyst (or any recipient)
    //     // Mail::to('shruti.sociomark@gmail.com')->send(new EventReminderMail($event));

    //     return response()->json($event);
    // }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'start' => 'required|date',
        ]);

        $event = Event::create($request->only(['title', 'description', 'start']));

        return response()->json(['message' => 'Event created successfully', 'event' => $event]);
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }
}
