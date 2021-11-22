@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-5">
            <h1 class="card-title"> {{$movie->title}} </h1>
            <address class="card-subtitle"> di {{ $movie->user->name }} </address>
            <address class="card-subtitle date"> {{ $movie->getFormattedDate('movie_date')}} </address>
            <address class="my-2">@if ($movie->category) 
                <span class="badge badge-primary px-4">{{ $movie->category->name }} </span>    
            @else 
                Nessuna categoria @endif </address>
            <p class="card-body"> {{$movie->movie_content}} </p>
            <div class="card-footer back-to-list">
                <a href="{{route('admin.movies.index')}}" class="btn btn-toolbar">Torna alla lista dei movie</a>
            </div>
            
        </div>
    </div>
@endsection