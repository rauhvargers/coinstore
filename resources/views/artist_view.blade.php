@extends('layout')

@section('title')
 Artist {{ $artist->name }}
@endsection


@section('content')
    <article class='m-5 p-5'>
    <h1 class='text-lg font-bold mb-3'>{{ $artist->name }}</h1>
    <section class=''>
        {!! $artist->bio !!}
    </section>
    <section class=''>
        <h2 class="text-lg mt-5 ">Coins by {{ $artist->name }} </h2>

        <ul class="list-disc list-outside m-5 p-5 pt-0 mt-0">
            @foreach ($artist->products as $product)
                <li>
                    <x-coin-info :title="$product->title" :item="$product" class='useful' some-data-value='not useful'>
                        <p class='text-xs text-slate-600 mb-2'>{{ $product->description }}</p>
                    </x-coin-info>
                </li>
            @endforeach

        </ul>
    </section>

    @auth
        <a href="/artist/{{ $artist->slug }}/edit">Edit artist information</a>
    @endauth



    </article>
    <hr />
    <a class='text-lime-500 p-5 m-5 flex' href='{{ url('artists') }}'>Back to list</a>
@endsection
