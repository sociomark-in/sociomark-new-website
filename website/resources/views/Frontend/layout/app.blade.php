<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('Frontend/partial/styleLinks')
    @yield('custome-style')
    @stack('styles')
</head>

<body>
    @include('Frontend/partial/Header')
    <style>
        #cursor {
            width: 2.3rem;
            height: 2.3rem;
            background: #ffffff;
            mix-blend-mode: difference;
            border-radius: 50%;
            position: fixed;
            z-index: 99999;
        }
    </style>
    <script>
        // $("a").each(function() { // Use .each() to iterate over jQuery elements
        //     $(this).on('mouseenter', () => { // 'this' refers to the current 'a' element
        //         $("#cursor").css("transform", "scale(1.5)"); // Use .css() for style manipulation
        //     });
        //     $(this).on('mouseleave', () => { // 'this' refers to the current 'a' element
        //         $("#cursor").css("transform", "scale(1)"); // Use .css() for style manipulation
        //     });
        // });
    </script>
    <div id="cursor"></div>
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
            duration: 700,
            easing: 'ease-in-out',
            once: true
        });
    </script>
    <script>
        const cursor = document.querySelector("#cursor");
        var timeout;

        //follow cursor on mousemove
        document.addEventListener("mousemove", (e) => {
            let x = e.clientX;
            let y = e.clientY;

            cursor.style.top = y + "px";
            cursor.style.left = x + "px";
            cursor.style.display = "block";

            //cursor effects when mouse stopped
            function mouseStopped() {
                cursor.style.display = "none";
            }
            clearTimeout(timeout);
            timeout = setTimeout(mouseStopped, 8000);
        });

        //cursor effects when mouseout
        document.addEventListener("mouseout", () => {
            cursor.style.display = "none";
        });
    </script>


</body>

</html>
