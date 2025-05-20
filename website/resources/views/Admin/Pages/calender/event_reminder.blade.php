<!DOCTYPE html>
<html>
<head>
    <title>Event Reminder</title>
</head>
<body>
    <h2>Event Reminder: {{ $event->title }}</h2>
    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->start)->format('F j, Y') }}</p>
    <p><strong>Description:</strong> {{ $event->description }}</p>
</body>
</html>
