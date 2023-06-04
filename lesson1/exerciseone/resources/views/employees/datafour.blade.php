<!DOCTYPE html>
<html>
    <head>
        <title>Employees page</title>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is Employees Data Four</p>

        <h3>Hi there {{$greeting}}</h3>



        <ul>
            @foreach ($students as $value)
                <li><?php echo $value;?></li>
            @endforeach
        </ul>

    </body>
</html>

{{-- 4CP --}}
