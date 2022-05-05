@extends('layout')

@section('title', 'All artists')


@section('content')
    <ul>
        @foreach ($artists as $artist)
            <li><a href='/artist/{{ $artist->slug }}'>{{$artist->name ?? 'Untitled artist'}}</a></li>
        @endforeach
    </ul>
@endsection
