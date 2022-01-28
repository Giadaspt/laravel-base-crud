@extends('layouts.main')

@section('content')

<div class="container mt-5">
  <h2 class="text-center"> {{ $comics->title }} </h2>
  <h5 class="text-center">{{ $comics->series }}</h5>
  <div class="d-flex p-4">
    <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
    <p class="align-items-center p-5">{{ $comics->description }}</p>
  </div>
  <div class="d-flex pl-4">
    <p class="pr-2">{{ $comics->type }}</p>
    <p class="pr-2">Euro {{ $comics->price }}</p>
    <p>{{ $comics->sale_date }}</p>
  </div>
  <button class="btn btn-primary ml-4 mb-5">
    <a href="{{ route('comics.index', $comics) }}"> Indietro </a>
  </button>
  <button class="btn btn-warning mb-5"> 
    <a href="{{ route('comics.edit', $comics) }}">Edit</a>  
  </button>
</div>

  
@endsection