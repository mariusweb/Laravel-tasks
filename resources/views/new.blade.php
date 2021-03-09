<!DOCTYPE html>
<html lang="en">

<head>
    <h1> test file</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test file</title>
</head>

<body>
    <div>start

    </div>
    <h1>Test file</h1>
    {{ $var=8 }}
    {{ date('Y-m-d') }}
    {{ $var }}
    <div>
        @if($var > 4)
        kintamasis daugiau uz 4
        @else
        kintamasis maziua uz 4
        @endif

        @for ($i = 0; $i <= 2; $i++) Number {{ $i }} @endfor </div> </body> </html>