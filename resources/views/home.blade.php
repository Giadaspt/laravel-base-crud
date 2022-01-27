@extends('layouts.main')


@section('content')
  <div class="container">
    <h1 class="text-center m-5">
      Tanti fumetti a tua scelta: Scegli, Clicca, Compra
    </h1>
    <p> Clicca sul fumetto per vedere la descrizione</p>
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