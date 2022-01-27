@extends('layouts.main')


@section('content')
  <div class="container">
    <h1 class="text-center m-5">
      Tanti fumetti a tua scelta: Scegli, Clicca, Compra
    </h1>
    <h4 class="text-center"> Clicca sul fumetto per la descrizione</h4>
  </div>

  <div class="row d-flex">
    @foreach ($comics as $comic)
      <div class="comic_home_card ">
        <a href="{{ route('comics.show', $comic) }}">
          <img src="{{ $comic->thumb }}" alt="">
        </a>
      </div>
    @endforeach
  </div>

@endsection