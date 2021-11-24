@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card col-12">
            <div class="card-body">
                <h5 class="card-title text-uppercase font-weight-bold mb-4">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->director }}</h6>
                <p class="card-text">{{ $movie->description }}</p>
                <div class="d-flex">
                    <a href="{{ route('admin.movies.edit', $movie) }}" class="btn btn-primary mr-5">Modifica</a>
                    <form action="{{route('admin.movies.destroy', $movie->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
    
                        <button class="btn btn-danger" type="submit">Elimina</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="card p-5">
            <h1 class="card-title"> {{$movies->title}} </h1>
            <address class="card-subtitle date"> {{ $movies->director}} </address>
            <p class="card-body"> {{$movies->description}} </p>
            <div class="card-footer back-to-list">
                <a href="{{route('admin.movies.index')}}" class="btn btn-toolbar">Torna alla lista dei movie</a>
            </div>
        </div>
    </div> --}}
@endsection