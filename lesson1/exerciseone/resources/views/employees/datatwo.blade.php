<!DOCTYPE html>
<html>
    <head>
        <title>Employees page</title>
    </head>
    <body>
        <h1>Wellcome to our page</h1>

        <p>This is Employees Data Two</p>

        <h3>Hi there</h3>

        @php
            echo "<pre>".print_r($students,true)."</pre>";
            echo $students[0]."<br/>";
            echo $students[1]."<br/>";
            echo $students[2]."<br/>";
        @endphp

    </body>
</html>

{{-- 28EN --}}
