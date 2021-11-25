@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <h2 class="mb-3">Tutti i Movies</h2>
                <a href="{{ route('admin.movies.create') }}" class="btn btn-primary">Inserisci un nuovo Movie</a>
            </div>
            @forelse ($movies as $movie)

                <div class="card col-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{$movie->director }}</p>
                        <a href="{{ route('admin.movies.show', $movie) }}" class="btn btn-primary">Go to Movie</a>
                    </div>
                </div>
         
            @empty
                <h3>No Movies</h3>  
            @endforelse
        </div>
    </div>


@endsection