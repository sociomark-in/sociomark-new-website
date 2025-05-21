@extends('admin.layout.app')

@section('page-content')
<div class="page-content">

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 d-none d-md-block">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Full calendar</h6>
                            <div id='external-events' class='external-events'>
                                <h6 class="mb-2 text-secondary">Draggable Events</h6>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>Birth Day</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>New Project</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>Anniversary</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>Client Meeting</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event hii'>
                                    <div class='fc-event-main'>Office Trip</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div id='fullcalendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Event Details Modal --}}
    <div id="fullCalModal" class="modal fade" tabindex="-1" aria-labelledby="modalTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modalTitle1" class="modal-title"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modalBody1" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="deleteEventBtn">Delete Event</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Create Event Modal --}}
    <div id="createEventModal" class="modal fade" tabindex="-1" aria-labelledby="modalTitle2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modalTitle2" class="modal-title">Add Event</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addEventForm">
                        @csrf
                        <div class="mb-3">
                            <label for="Title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="Title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description">
                        </div>
                        {{-- Hidden field to store the selected event date from calendar click --}}
                        <input type="hidden" id="description" name="description">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addEventBtn">Add</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom Alert Modal (instead of alert()) --}}
    <div id="customAlertModal" class="modal fade" tabindex="-1" aria-labelledby="customAlertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customAlertModalLabel">Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="customAlertModalBody">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script>
    // Function to show a custom alert modal
    function showCustomAlert(message) {
        $('#customAlertModalBody').html(message);
        $('#customAlertModal').modal('show');
    }

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('fullcalendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            selectable: true,
            editable: true,
            droppable: true,
            events: "{{ route('listEvent') }}",

            // When a date is clicked
            dateClick: function(info) {
                $('#createEventModal').modal('show');
                $('#addEventForm').data('selected-date', info.dateStr);
                $('#Title').val('');
                $('#description').val('');
            },

            // When an event is clicked
            eventClick: function(info) {
                info.jsEvent.preventDefault();

                const description = info.event.extendedProps.description || 'No description provided.';
                // Removed notificationDate display
                // Removed notifiedStatus display

                $('#modalTitle1').text(info.event.title);
                $('#modalBody1').html(`
                    <p><strong>Description:</strong> ${description}</p>
                    <p><strong>Event Date:</strong> ${info.event.startStr}</p>
                `);

                $('#deleteEventBtn').data('event-id', info.event.id);

                $('#fullCalModal').modal('show');
            },

            // Event Dragging and Resizing (Optional: Backend routes for updates would be needed)
            eventDrop: function(info) {
                showCustomAlert('Event moved to ' + info.event.startStr + '. (Backend update for drag/resize not implemented)');
            },
            eventResize: function(info) {
                showCustomAlert('Event resized. (Backend update for drag/resize not implemented)');
            },
        });

        calendar.render();

        // Add event to calendar via AJAX
        $('#addEventBtn').on('click', function() {
            let selectedDate = $('#addEventForm').data('selected-date');
            let title = $('#Title').val();
            let description = $('#description').val();

            if (!title || !selectedDate) {
                showCustomAlert('Please fill in all required fields (Title, Event Date).');
                return;
            }

            $.ajax({
                url: "{{ route('eventsStore') }}",
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    title: title,
                    description: description,
                    start: selectedDate, // Use 'start' for the event date
                },
                success: function(response) {
                    calendar.addEvent({
                        id: response.id,
                        title: response.title,
                        start: response.start,
                        extendedProps: {
                            description: response.extendedProps.description,
                        }
                    });

                    $('#createEventModal').modal('hide');
                    $('#Title').val('');
                    $('#description').val('');
                    showCustomAlert('Event created successfully!');
                },
                error: function(xhr) {
                    let errorMessage = 'Error creating event.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                        errorMessage = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                    }
                    showCustomAlert(errorMessage);
                }
            });
        });

        // Delete event handler
        $('#deleteEventBtn').on('click', function() {
            let eventId = $(this).data('event-id');

            if (!eventId) {
                showCustomAlert('No event selected for deletion.');
                return;
            }

            if (!confirm('Are you sure you want to delete this event?')) {
                return;
            }

            $.ajax({
                url: "{{ route('destroy', '') }}/" + eventId,
                type: 'POST',
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    let event = calendar.getEventById(eventId);
                    if (event) {
                        event.remove();
                    }

                    $('#fullCalModal').modal('hide');
                    showCustomAlert(response.message);
                },
                error: function(xhr) {
                    let errorMessage = 'Error deleting event.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    showCustomAlert(errorMessage);
                }
            });
        });

    });
</script>
@endpush

<!-- ### **10. Scheduler Configuration (Updated)**

The core email notification functionality relies on Laravel's scheduler. You must ensure the following are correctly set up:

* **Artisan Command:** Your `app/Console/Commands/SendEventNotifications.php` file should exist and contain the logic to query for events whose `start` date is today and send emails. **Note:** Since the `notified` column is removed, the system will attempt to send an email for every event matching today's `start` date, each time the scheduler runs. If you need to prevent duplicate emails, you would need to implement a separate mechanism (e.g., a separate log of sent emails or a more complex `notified` tracking system).

* **Kernel Configuration:** Your `app/Console/Kernel.php` should schedule this Artisan command to run periodically (e.g., daily at a specific time).

* **Cron Job:** A system-level cron job must be configured on your server to run `php artisan schedule:run` every minute.

### **How to Test (Recap):**

1.  **Run Migrations:** After updating your migration, run `php artisan migrate:fresh --seed` (use `migrate:fresh` only in development as it will drop all tables).
2.  **Start Development Server:** `php artisan serve`
3.  **Access Calendar:** Go to `http://127.0.0.1:8000/admin/calendar` (or whatever URL you configured for `admin.calendar.index`).
4.  **Add Events:** Click on a date, fill in the event details (Title and Description), and click "Add."
5.  **Manually Trigger Notifications (for testing):** To see emails sent without waiting for the scheduler, run: `php artisan app:send-event-notifications`.
    * Check your Mailtrap inbox (or configured mail service) for the emails.

This streamlined approach ensures that when you create an event, the system will automatically attempt to send an email notification on the exact `start` date of that event. -->
