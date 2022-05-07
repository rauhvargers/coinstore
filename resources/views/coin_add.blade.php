@extends('layout')

@section('title', 'Add a new coin')


@section('content')
    <form method="POST" action="/artist">
        @csrf

        <h2>Artist: {{ $artist->name  }}</h2>

        @if ($errors->any())
        {{ dd($errors) }}
            <div class="alert alert-danger text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for='name' class=''>Title</label>
            <input type="text" class="text" name="title" value="{{ old('title') }}" />
        </div>

        <div>
            <label for='description' />Description</label>
            <textarea name="description" />{{ old('name') }}</textarea>
        </div>

        <div>
            <label for='slug' />URL slug</label>
            <input type="text" class="text" name="slug" value="{{ old('slug') }}"/>
        </div>

        <button type="submit">Save</button>


    </form>
@endsection
