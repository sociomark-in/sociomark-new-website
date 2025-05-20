<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Event;
use App\Mail\EventReminderMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendEventReminders extends Command
{
    protected $signature = 'events:send-reminders';
    protected $description = 'Send email reminders for today\'s events';

    public function handle()
    {
        $today = Carbon::today()->toDateString();

        $events = Event::whereDate('start', $today)->get();

        foreach ($events as $event) {
            Mail::to('shruti.sociomark@gmail.com')->send(new EventReminderMail($event));
        }

        $this->info("Sent " . $events->count() . " event reminder emails.");
    }
}
