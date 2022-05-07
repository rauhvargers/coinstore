@extends('layout')

@section('title', 'Add a new artist')


@section('content')
    <form method="POST" action="/artist">
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
                <x-input type="text" class="text" name="name" value="{{ old('name') }}" />
            </div>

            <div>
                <x-label for='slug'>URL slug</x-label>
                @error('slug')
                <div class="text-red-600">{{ $message }}</div>
                @enderror

                <x-input type="text" class="text" name="slug" value="{{ old('slug') }}" />
            </div>

            <div>
                <x-label for='description'>Description</x-label>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>
            <button type="submit">Save</button>
        </div>

    </form>
@endsection
