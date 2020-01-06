@extends('master')

@section('content')

<h1 class="mt-10 text-2xl font-bold mb-5">Artists - Edit</h1>

<form method="post" action="/artists/{{ $artist->id }}" class="mb-5">
    @csrf
    @method('put')

    <div class="mb-5">
        <label class="block mb-1" for="">Name</label>
        <input type="text" name="name" id="name" class="w-6/12 border border-gray-500 focus:border-gray-600 outline-none px-2 py-1
            @error('name') border-red-500 @enderror"
            value="{{ old('name', $artist->name) }}">
        @error('name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block mb-1" for="">Description</label>
        <textarea name="description" id="description" cols="30" rows="5" class="w-6/12 border border-gray-500 focus:border-gray-600 outline-none px-2 py-1
        @error('description') border-red-500 @enderror">{{ old('description', $artist->description) }}</textarea>
        @error('description')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Submit" class="px-3 py-1 rounded bg-green-700 hover:bg-green-800 text-white">
</form>

<hr class="mb-2 mb-3">

<a href="/artists" class="inline-block px-3 py-1 rounded bg-blue-700 hover:bg-blue-800 text-white text-xs">Back to all Artists</a>

@endsection
