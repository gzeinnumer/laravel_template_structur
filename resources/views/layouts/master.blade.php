<html>
    @include('layouts.partials.head')
    <body>
        @include('layouts.partials.aside')
 
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.partials.js')
    </body>
</html>