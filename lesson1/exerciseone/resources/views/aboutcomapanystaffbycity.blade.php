<!DOCTYPE html>
<html>
    <head>
        <title>About Me</title>
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
