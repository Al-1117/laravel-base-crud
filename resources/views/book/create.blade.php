<h2>Inserimento di un nuovo libro alla collezione</h2>


<form class="" action="{{route('books.store')}}" method="post">
  @csrf
  @method('POST')
  <ul>
    {{-- title --}}
    <li>
      <label>Title</label>
      <input type="text" name="title" value="{{old('title')}}">
    </li>

    {{-- Author --}}

    <li>
      <label>Author</label>
      <input type="text" name="author" value="{{old('author')}}">
    </li>

    {{-- Description --}}
    <li>
      <label>Description</label>
      <textarea name="description" rows="8" cols="80"></textarea>
    </li>

    {{-- Year --}}
    <li>
      <label>Year</label>
      <input type="text" name="year" value="{{old('year')}}">
    </li>

    <li>
      <input type="submit" value="Add">

    </li>

  </ul>

  <div class="errors">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>



</form>
