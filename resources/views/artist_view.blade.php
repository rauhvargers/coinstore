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
    <section>
        <h2>Coins by {{ $artist->name }}</h2>
        <ul>
            @foreach ($artist->products as $product)
                <li>
                    <x-coin-info :title="$product->title" :item="$product" class='useful' some-data-value='not useful'>
                        <small>This is just not useful</small>
                    </x-coin-info>
                </li>
            @endforeach
        </ul>
    </section>
    <a href='{{ url('artists') }}'>Back to list</a>
</body>

</html>
