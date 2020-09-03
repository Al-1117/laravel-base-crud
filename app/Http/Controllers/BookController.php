<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Book::all();

      return view('book.books', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Dati inseriti dall'utente
      $data = $request->all();
      // Creazione del nuovo oggetto libro
      $new_item = new Book();

      // Assegnazione parametri nuovo oggetto
      $new_item->title = $data['title'];
      $new_item->author = $data['author'];
      $new_item->description = $data['description'];
      $new_item->year = $data['year'];

      // Salvataggio dei dati
      $new_item->save();

      // Prendo solo l'ultimo oggetto creato in modo da poterlo visualizzare
      $new_book = Book::orderBy('id', 'desc')->first();

      // Reindirizzo alla view show con il nuovo libro creato
      return redirect()->route('books.show', $new_book);





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
      return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
      return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
      return view('book.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
      // Elimino l'oggetto selezionato

      $book->delete();


        // Reindirizzo alla pagina principale
      return redirect()->route('books.index');

    }
}
