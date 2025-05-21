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

    // public function index()
    // {
    //     // Return only the necessary fields
    //     return response()->json(
    //         Event::select('id', 'title', 'description', 'start')->get()
    //     );
    // }
    public function index(Request $request)
    {
        $events = Event::all();

        $formattedEvents = $events->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start->toDateString(), // Use 'start' column for FullCalendar's 'start'
                'extendedProps' => [
                    'description' => $event->description,
                    // 'notified' status is no longer included
                ]
            ];
        });

        return response()->json($formattedEvents);
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


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string',
    //         'description' => 'nullable|string',
    //         'start' => 'required|date',
    //     ]);

    //     $event = Event::create($request->only(['title', 'description', 'start']));

    //     return response()->json(['message' => 'Event created successfully', 'event' => $event]);
    // }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start' => 'required|date', // This 'start' field from FullCalendar will be our event's 'start' date
        ]);

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'start' => $request->start, // Map FullCalendar's 'start' to our 'start' column
            // 'notified' is no longer set
        ]);

        return response()->json([
            'id' => $event->id,
            'title' => $event->title,
            'start' => $event->start->toDateString(),
            'extendedProps' => [
                'description' => $event->description,
                // 'notified' is no longer included
            ]
        ]);
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
