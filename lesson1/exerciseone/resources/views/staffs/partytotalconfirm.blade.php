<!DOCTYPE html>
<html>
    <head>
        <title>Staf Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is Staff Party Total is {{$total}} are {{$status}}</p>

        <ul">
            <li><a href="{{URL::to('staffs')}}">Home</a></li>
            <li><a href="{{route('staffs.party')}}">Party</a></li>
            <li><a href="">Edit</a></li>
        </ul>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

