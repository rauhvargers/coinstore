@extends('layout')

@section('title')
Edit artist information: {{ $artist->name}}
@endsection


@section('content')
    <form method="POST" action="/artist/{{ $artist->slug }}">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="m-3">
            <div>
                <x-label for='name' class=''>Name</x-label>
                <x-input type="text" class="text" name="name" value="{{ old('name', $artist->name) }}" />
            </div>

            <div>
                <x-label for='slug'>URL slug</x-label>
                @error('slug')
                <div class="text-red-600">{{ $message }}</div>
                @enderror

                <x-input type="text" class="text" name="slug" value="{{ old('slug', $artist->slug) }}" />
            </div>

            <div>
                <x-label for='description'>Biography</x-label>
                <textarea name="description">{{ old('description', $artist->bio) }}</textarea>
            </div>
            <button type="submit">Update</button>
        </div>

    </form>
@endsection
