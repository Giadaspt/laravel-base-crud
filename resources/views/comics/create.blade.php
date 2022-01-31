@extends('layouts.main')

@section('content')
<div class="row m-5">
  <div class="col-8 offset-2">
    @if ($errors->any())
      <div class="alert alert-danger m-4" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Nome del fumetto</label>
        <input type="text" class="form-control @error('title')is-invalid @enderror" 
        value="{{ old('title') }}"
        name="title" 
        id="title">
        @error('title')
          <p class=" text-danger">
            {{$message}}
          </p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control @error('series')is-invalid @enderror" 
        value="{{ old('series') }}"
        name="series" 
        id="series">
        @error('series')
          <p class=" text-danger">
            {{$message}}
          </p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control @error('thumb')is-invalid @enderror" 
        value="{{ old('thumb') }}"
        name="thumb" 
        id="thumb">
        @error('thumb')
          <p class=" text-danger">
            {{$message}}
          </p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control @error('type')is-invalid @enderror" 
        value="{{ old('type') }}"
        name="type" 
        id="type">
        @error('type')
        <p class=" text-danger">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="date" class="form-control @error('sale_date')is-invalid @enderror" 
        value="{{ old('sale_date') }}"
        name="sale_date" 
        id="sale_date">
        @error('sale_date')
        <p class=" text-danger">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control @error('price')is-invalid @enderror" 
        value="{{ old('price') }}"
        name="price" id="price">
        @error('price')
        <p class=" text-danger">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control @error('description')is-invalid @enderror" 
        type="text" 
        name="description" id="description">{{ old('description') }}</textarea>
        @error('description')
        <p class=" text-danger">
          {{$message}}
        </p>
        @enderror
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