<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['items' => $books]);
    }

    public function store(Request $request)
    {
        Book::create([
            'book_name'   => $request->book_name,
            'book_author' => $request->book_author,
            'book_stock'  => $request->book_stock,
            'book_date'   => $request->book_date
        ]);

        return redirect('/books');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $book->update([
            'book_name'   => $request->book_name,
            'book_author' => $request->book_author,
            'book_stock'  => $request->book_stock,
            'book_date'   => $request->book_date
        ]);

        return redirect('/books');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books');
    }
}