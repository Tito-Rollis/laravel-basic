<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Blog Web | About</title>
</head>
<body>
    <ul >
        <li>My name is: {{  $name }}</li>
        <li>I'm a {{ $as }}</li>
        <li><img src="{{ $image }}" alt="foto" width="100px"></li>
    </ul>
</body>
</html>