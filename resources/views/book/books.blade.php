
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

@endforeach
