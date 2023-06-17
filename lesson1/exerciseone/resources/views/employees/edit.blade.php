<!DOCTYPE html>
<html>
    <head>
        <title>Employees Edit</title>
        <link href="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" rel="icon" type="image/png" sizes="32x32"/>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is Employees Edit</p>

        @php
            echo "<pre>".print_r($data["employeedata"],true)."</pre>";
            echo $data["employeedata"]["name"]."<br/>";
            echo $data["employeedata"]["email"]."<br/>";
            echo $data["employeedata"]["phone"]."<br/>";
        @endphp


    </body>
</html>

{{-- 28EN --}}
