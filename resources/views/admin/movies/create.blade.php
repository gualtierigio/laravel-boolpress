@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card col-12">
            <form action="{{ route('admin.movies.store') }}" method="POST" class="p-3">
                @csrf
                
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="title">Titolo</label>
                    <input type="email" class="form-control" id="title" name="title">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="director">Regista</label>
                    <input type="password" class="form-control" id="director" name="director">
                  </div>
                </div>
                <div class="form-group">
                  <label for="description">Descrizione</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione del film...">
                </div>
                <button type="submit" class="btn btn-primary">Inserisci nuovo movie</button>
              </form>
        </div>
    </div>
    
@endsection