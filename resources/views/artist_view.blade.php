<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist {{ $artist->name }}</title>
</head>
<body>
    <h1>{{ $artist->name }}</h1>
    <section>
        {!! $artist->bio !!}
    </section>
    <a href='/artists/'>Back to list</a>
</body>
</html>