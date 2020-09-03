<h3>Modifica dettagli libro: <i>{{$book->title}}</i></h3>

<div class="">
  <form action="{{ route('books.update', $book->id)}}" method="post">
    @csrf
    @method('PUT')

    <ul>
      {{-- title --}}
      <li>
        <label>Title</label>
        <input type="text" name="title" value="{{$book->title}}">
      </li>

      {{-- Author --}}

      <li>
        <label>Author</label>
        <input type="text" name="author" value="{{$book->author}}">
      </li>

      {{-- Description --}}
      <li>
        <label>Description</label>
        <textarea name="description" rows="8" cols="80" value="{{$book->description}}"></textarea>
      </li>

      {{-- Year --}}
      <li>
        <label>Year</label>
        <input type="text" name="year" value="{{$book->year}}">
      </li>

      <li>
        <input type="submit" value="Add">

      </li>

    </ul>

  </form>
</div>
