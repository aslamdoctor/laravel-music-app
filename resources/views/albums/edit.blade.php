@extends('master')

@section('content')

<h1 class="mt-10 text-2xl font-bold mb-5">Albums - Edit</h1>

<form method="post" action="/albums/{{ $album->id }}" class="mb-5">
    @csrf
    @method('put')

    <div class="mb-5">
        <label class="block mb-1" for="">Name</label>
        <input type="text" name="name" id="name" class="w-6/12 border border-gray-500 focus:border-gray-600 outline-none px-2 py-1
            @error('name') border-red-500 @enderror"
            value="{{ old('name', $album->name) }}">
        @error('name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block mb-1" for="">Description</label>
        <textarea name="description" id="description" cols="30" rows="5" class="w-6/12 border border-gray-500 focus:border-gray-600 outline-none px-2 py-1
        @error('description') border-red-500 @enderror">{{ old('description', $album->description) }}</textarea>
        @error('description')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block mb-1" for="">Release Date</label>
        <input type="text" name="release_date" id="release_date" class="w-3/12 border border-gray-500 focus:border-gray-600 outline-none px-2 py-1
            @error('release_date') border-red-500 @enderror"
            value="{{ old('release_date', $album->release_date) }}">
        @error('release_date')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Submit" class="px-3 py-1 rounded bg-green-700 hover:bg-green-800 text-white">
</form>

<hr class="mb-2 mb-3">

<a href="/albums" class="inline-block px-3 py-1 rounded bg-blue-700 hover:bg-blue-800 text-white text-xs">Back to all Albums</a>

@endsection
