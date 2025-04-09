<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('Frontend/partial/styleLinks')
    @yield('custome-style')
</head>

<body>
    @include('Frontend/partial/Header')
    <div id="app">
        @yield('content')
    </div>
    @include('Frontend/partial/Footer')
    @include('Frontend/partial/jsLinks')
    {{-- This will render all scripts pushed with @push('scripts') --}}
    @stack('scripts')
    <!-- Before </body> -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // Default animation duration
    easing: 'ease-in-out',
    once: true
  });
</script>


</body>

</html>