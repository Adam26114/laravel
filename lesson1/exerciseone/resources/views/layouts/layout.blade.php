<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" rel="icon" type="image/png" sizes="32x32"/>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is @yield('heading')</p>

        @yield('contents')

        <div>
            <h4>This is ouur into form index</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>

        @yield('footer')


    </body>
</html>

{{-- 28EN --}}
