<!DOCTYPE html>
<html>
    <head>
        <title>Employees Show</title>
        <link href="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" rel="icon" type="image/png" sizes="32x32"/>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is Employees Show</p>


        @php
            echo "<pre>".print_r($employeedata,true)."</pre>";
            echo $employeedata["name"]."<br/>";
            echo $employeedata["email"]."<br/>";
            echo $employeedata["phone"]."<br/>";
        @endphp

        <ul>
            @foreach ($employeedata as $value)
            {{-- <li>{{$value}}</li> --}}
            <li>{!!$value!!}</li>
            @endforeach
        </ul>

    </body>
</html>

{{-- 28EN --}}
