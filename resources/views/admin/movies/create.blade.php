@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="col-12">
        <h3 class="text-right">
          <a href="{{ route('admin.movies.index') }}">Torna a movies</a>
        </h3>
      </div>
        <div class="card col-12">
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>        
            @endif
            <form action="{{ route('admin.movies.store') }}" method="POST" class="p-3" novalidate>
                @csrf
                
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Name">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="director">Regista</label>
                    <input type="text" class="form-control" id="director" name="director" placeholder="Director name">
                  </div>

                </div>

                <div class="form-group">
                  <label for="img_url">Descrizione</label>
                  <input type="text" class="form-control" id="img_url" name="img_url" placeholder="link immagine">
                </div>
                
                <div class="form-group">
                  <label for="description">Descrizione</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione del film...">
                </div>
                <div class="d-flex">
                  <button type="reset" class="btn btn-secondary mr-3">Cancella i campi</button>
                  <button type="submit" class="btn btn-primary">Inserisci nuovo movie</button>
                </div>
              </form>
        </div>
    </div>
    
@endsection