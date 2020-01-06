@extends('master')

@section('content')

<div class="mt-10 mb-5 flex justify-between items-center">
    <h1 class="text-2xl font-bold">Albums</h1>
    <a href="/albums/create" class="inline-block px-3 py-1 rounded bg-green-700 hover:bg-green-800 text-white text-xs">Add New</a>
</div>

@if (session()->has('status'))
    <div class="mb-5 bg-yellow-200 px-3 py-2 font-semibold">
        {{ session('status') }}
    </div>
@endif

@if(count($albums))

    @foreach ($albums as $album)

    <h2 class="font-bold mb-1">{{ $album->name }}</h2>

    <p class="mb-2">{{ $album->description }}</p>
    <p class="mb-2">{{ $album->release_date }}</p>
    <div class="flex justify-content-start mb-3">
        <a href="/albums/{{ $album->id }}" class="inline-block px-3 py-1 rounded bg-green-700 hover:bg-green-800 text-white text-xs mr-2">View</a>
        <a href="/albums/{{ $album->id }}/edit" class="inline-block px-3 py-1 rounded bg-blue-700 hover:bg-blue-800 text-white text-xs mr-2">Edit</a>
        <form method="post" action="/albums/{{ $album->id }}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="cursor-pointer inline-block px-3 py-1 rounded bg-red-700 hover:bg-red-800 text-white text-xs mr-2">
        </form>
    </div>
    <hr class="mb-2">

    @endforeach

@else
    <div class="mb-5 bg-yellow-200 px-3 py-2 font-semibold">
        No records found
    </div>
@endif

@endsection
