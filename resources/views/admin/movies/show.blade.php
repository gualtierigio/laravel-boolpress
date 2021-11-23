@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-5">
            <h1 class="card-title"> {{$movies->title}} </h1>
            <address class="card-subtitle date"> {{ $movies->director}} </address>
            <p class="card-body"> {{$movies->description}} </p>
            <div class="card-footer back-to-list">
                <a href="{{route('admin.movies.index')}}" class="btn btn-toolbar">Torna alla lista dei movie</a>
            </div>
        </div>
    </div>
@endsection