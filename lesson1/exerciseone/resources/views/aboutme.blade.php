<!DOCTYPE html>
<html>
    <head>
        <title>About Me</title>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is About Site</p>

        <ul>
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('/about')}}">About</a></li>
            <li><a href="{{route('profiles')}}">Profile</a></li>

        </ul>

    </body>
</html>
