<!doctype html>
<html class="no-js" lang="zxx">

<head>
  @include('Frontend/partial/styleLinks')
  @yield('custome-style')
</head>

<body>
  @include('Frontend/partial/Header')
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
      duration: 1000, // Default animation duration
      easing: 'ease-in-out',
      once: true
    });
  </script>
  <script>
    const cursor = document.querySelector("#cursor");
    var timeout;

    //follow cursor on mousemove
    document.addEventListener("mousemove", (e) => {
      let x = e.pageX;
      let y = e.pageY;

      cursor.style.top = y + "px";
      cursor.style.left = x + "px";
      cursor.style.display = "block";

      //cursor effects when mouse stopped
      function mouseStopped(){
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