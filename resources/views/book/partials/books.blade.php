@extends('book.layouts.layout');

@section('main')


  <h1>Elenco libri</h1>

  @foreach ($books as $book)
    <ul>
      <li>
        {{-- Title --}}
        <h2>Title: {{$book->title}}</h2>
        {{-- <a href="#"></a> --}}
      </li>
    </ul>


    {{-- Dettagli --}}

    <a href="{{route('books.show', $book->id)}}">Visualizza ulteriori informazioni</a>

    {{-- Crea --}}

    <a href="{{route('books.create')}}">Crea</a>

    {{-- Modifica --}}

    <a href="{{route('books.edit', $book->id)}}">Modifica</a>



    {{-- Cancellazione --}}

    <form class="" action="{{route('books.destroy', $book->id)}}" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" name="" value="Elimina elemento">
    </form>

  @endforeach

@endsection
