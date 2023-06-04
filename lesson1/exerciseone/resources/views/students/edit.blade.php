<!DOCTYPE html>
<html>
    <head>
        <title>Student Me</title>
        <link href="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" rel="icon" type="image/png" sizes="32x32"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is Student <b style="color:red">Edit</b></p>

        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none text-primary" href="{{route('students.index')}}">Index</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none text-success" href="{{route('students.show')}}">Show</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="{{route('students.edit')}}">Edit</a></li>
        </ul>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
