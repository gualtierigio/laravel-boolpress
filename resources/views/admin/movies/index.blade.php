@extends('layouts.app')

@section('content')

    <h1>Tutti i Movies</h1>

    @forelse ($movies as $movie)

        <h3><a href="#">{{ $movie->title }}</a></h3>
        
    @empty

        <h3>No Movies</h3>
        
    @endforelse

@endsection