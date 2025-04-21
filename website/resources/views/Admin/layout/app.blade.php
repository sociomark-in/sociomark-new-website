<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.partials.styleLinks')
    @yield('customCSSAndJS')
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


    @include('admin.partials.jsLink')

</body>

</html>