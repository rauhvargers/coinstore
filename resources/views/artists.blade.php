@extends('layout')

@section('title', 'All artists')

@section('content')
    <ul class='flex'>
        @foreach ($artists as $artist)
            <li class='flex p-5 m-3 border-2 border-zinc-300 border-solid bg-slate-50'>
                <a class='flex w-full h-full'
                    href='/artist/{{ $artist->slug }}'>{{ $artist->name ?? 'Untitled artist' }}</a></li>
        @endforeach

    </ul>
    <p class='m-3'>
        <a href='/artist/create'>+ Add a new artist</a>
    </p>
@endsection
