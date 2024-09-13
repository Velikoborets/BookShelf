<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(3);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:45',
            'author_id' => 'required|exists:authors,id',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book successfuly created!');
    }

    public function show(Book $book) 
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('authors', 'book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:25',
            'author_id' => 'required|exists:authors,id',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Books successfully update');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted');
    }
}