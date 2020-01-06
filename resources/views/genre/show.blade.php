@extends('master')

@section('content')

<h1 class="mt-10 text-2xl font-bold mb-5">Genre - Show</h1>

<h2 class="font-bold mb-1">{{ $genre->name }}</h2>
<p class="mb-2">{{ $genre->description }}</p>

<hr class="mb-2 mb-3">

<a href="/genre" class="inline-block px-3 py-1 rounded bg-blue-700 hover:bg-blue-800 text-white text-xs">Back to all Genre</a>

@endsection
