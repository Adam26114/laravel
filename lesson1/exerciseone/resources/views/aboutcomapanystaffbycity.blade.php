<!DOCTYPE html>
<html>
    <head>
        <title>About Me</title>
        <link href="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" rel="icon" type="image/png" sizes="32x32"/>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is About Company Satff Page</p>

                    {{-- address bar နောက် ကစာကို လမ်းယူချင်လို့ --}}
        <p>Did you findout {{$sf}} and is he/she from {{$ct}}?</p>

        <ul>
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('/about/')}}">About</a></li>
            <li><a href="{{URL::to('/sayar/')}}">Sayar</a></li>
        </ul>

    </body>
</html>
