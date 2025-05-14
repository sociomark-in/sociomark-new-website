<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.partials.styleLinks')
    @yield('custom-style')
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet" />

    <!-- FullCalendar JS (GLOBAL build with all plugins included) -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="main-wrapper">
        @include('admin.partials.Sidebar')
        <div class="page-wrapper">
            @include('admin.partials.Header')
            @yield('page-content')
            @include('admin.partials.Footer')
        </div>
    </div>

    @yield('custom-js')
    @stack('scripts')

    @include('admin.partials.jsLink')

</body>

</html>