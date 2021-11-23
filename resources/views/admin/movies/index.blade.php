@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mb-5"><h1>Tutti i Movies</h1></div>
            @forelse ($movies as $movie)
        
                <div class="col-3 p-3">
                    <h3>
                        <a href="{{ route('admin.movies.show', $movie) }}">{{ $movie->title }}</a>
                    </h3>
                </div>
         
            @empty
                <h3>No Movies</h3>  
            @endforelse
        </div>
    </div>


@endsection