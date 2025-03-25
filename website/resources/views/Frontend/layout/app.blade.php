<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('Frontend/partial/styleLinks')
</head>

<body>
    @include('Frontend/partial/Header')
    <div id="app">
        @yield('content')
    </div>
    @include('Frontend/partial/jsLinks')

</body>

</html>