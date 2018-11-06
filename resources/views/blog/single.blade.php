<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Singgle Page</title>
</head>
<body>
    <h2>Single Page</h2>
    <h3> {{ $blog }} !!</h3>
    @foreach($users as $user)
        <li> {{ $user }} </li>
    @endforeach
</body>
</html>
