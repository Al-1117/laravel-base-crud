<h2>Inserimento di un nuovo libro alla collezione</h2>


<form class="" action="{{route('books.store')}}" method="post">
  @csrf
  @method('POST')
  <ul>
    {{-- title --}}
    <li>
      <label>Title</label>
      <input type="text" name="title">
    </li>

    {{-- Author --}}

    <li>
      <label>Author</label>
      <input type="text" name="author">
    </li>

    {{-- Description --}}
    <li>
      <label>Description</label>
      <textarea name="description" rows="8" cols="80"></textarea>
    </li>

    {{-- Year --}}
    <li>
      <label>Year</label>
      <input type="text" name="year">
    </li>

    <li>
      <input type="submit" value="Add">

    </li>

  </ul>



</form>
