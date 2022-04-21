<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All artists</title>
</head>
<body>
    <ul>
        @foreach ($artists as $artist)
            <li><a href='/artist/{{ $artist->slug }}'>{{$artist->name}}</a></li>
        @endforeach

    </ul>


</body>
</html>
