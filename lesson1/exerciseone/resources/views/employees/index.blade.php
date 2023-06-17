<!DOCTYPE html>
<html>
    <head>
        <title>Employees page</title>
        <link href="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" rel="icon" type="image/png" sizes="32x32"/>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is Employees Index</p>

        <?php

            // foreach ($employeedata as  $value) {
            //     echo $value;
            // }

        ?>

        {{-- @php
            foreach ($employeedata as  $value) {
                echo "<li>$value</li>";
            }
        @endphp --}}

        <ul>
            @foreach ($employeedata as $value)
                {{-- <li>{{$value}}</li> --}}
                <li>{!!$value!!}</li>
            @endforeach
        </ul>


        @php
            $city = "Yangon";
            echo $city;
        @endphp

        @if ($city === "Yangon")
            <h3>You correct</h3>
        @else
            <h3>You were wrong</h3>
        @endif

        {{services}} {{$demo}}
    </body>
</html>





{{-- 28EN --}}
