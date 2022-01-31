@extends('layouts.main')

@section('content')


<div class="container mt-5">
    @if (session('deleted'))
      <div class="alert alert-danger text-center m-4" role="alert">
        Il fumetto {{session('deleted')}} è stato eliminato
      </div>
    @endif
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
              <form onsubmit="return confirm('Confermi di voler eliminare il fumetto {{$comic->title}} ? ' )" action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"  > Delete </button>
                   
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