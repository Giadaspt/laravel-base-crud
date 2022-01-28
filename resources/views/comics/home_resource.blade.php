@extends('layouts.main')

@section('content')

  <div class="container mt-5">
    <h2 class="text-center mb-4"> Lista Fumetti </h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Serie</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <th scope="row"> {{$comic->id}} </th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>
              <button class="btn btn-primary "> 
                <a href="{{ route('comics.show', $comic) }}">Show</a>
              </button>
            </td>
            <td>
              <button class="btn btn-warning"> 
                <a href="{{ route('comics.edit', $comic) }}">Edit</a>  
              </button>
            </td>
            <td>
              <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn-danger"  value="Delete"> 
                   
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-end">
      {{ $comics->links() }}
    </div>
    <button class="btn btn-primary m-4">
      <a href="{{ route('home') }}"> Indietro </a>
    </button>

  </div>

  
@endsection