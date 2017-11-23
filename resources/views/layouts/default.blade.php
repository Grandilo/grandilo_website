<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div id="fh5co-page">
        <header class="row">
            @include('includes.header')
        </header>

        <div id="main" class="row">

            @yield('content')

        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>

</html>