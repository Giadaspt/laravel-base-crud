@extends('layouts.main')

@section('content')

<div class="container mt-5">
  <h2 class="text-center"> {{ $show_comics->title }} </h2>
  <h5 class="text-center">{{ $show_comics->series }}</h5>
  <div class="d-flex p-4">
    <img src="{{ $show_comics->thumb }}" alt="{{ $show_comics->title }}">
    <p class="align-items-center p-5">{{ $show_comics->description }}</p>
  </div>
  <div class="d-flex pl-4">
    <p class="pr-2">{{ $show_comics->type }}</p>
    <p class="pr-2">Euro {{ $show_comics->price }}</p>
    <p>{{ $show_comics->sale_date }}</p>
  </div>
  <button class="btn btn-primary ml-4 mb-5">
    <a href="{{ route('comics.index') }}"> Indietro </a>
  </button>
</div>

  
@endsection