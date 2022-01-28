@extends('layouts.main')

@section('content')
<div class="row m-5">
  <div class="col-8 offset-2">
    <h2>Modifica {{ $comics->title }}</h2>

    <form action="{{ route('comics.update', $comics) }}" method="POST">
      @csrf

      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Nome del fumetto</label>
        <input type="text" class="form-control" value="{{ $comics->title }}" name="title"  id="title">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" value="{{ $comics->series }}" name="series"  id="series">
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" value="{{ $comics->thumb }}" name="thumb"  id="thumb">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" value="{{ $comics->type }}" name="type"  id="type">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="text" class="form-control" value="{{ $comics->sale_date }}" name="sale_date"  id="sale_date">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" value="{{ $comics->price}}" name="price"  id="price">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" value="{{ $comics->description}}" name="description" id="description"></textarea>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="reset" class="btn btn-secondary">Cancella</button>
    </form>
  </div>
</div>
  
@endsection