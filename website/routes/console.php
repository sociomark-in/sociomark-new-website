<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// return function (Schedule $schedule) {
//     $schedule->command('events:send-reminders')->dailyAt('14:15');
// };
// Define your scheduled task here
Schedule::command('app:send-event-notifications')->dailyAt('13:18');

// $schedule->command('app:send-event-notifications')
//          ->daily()
//          ->timezone('Asia/Kolkata')
//          ->at('14:00');

// You can also define ad-hoc Artisan commands directly here if needed, e.g.:
// Artisan::command('app:greet {name}', function ($name) {
//     $this->comment("Hello, {$name}!");
// })->purpose('Display a greeting message.');