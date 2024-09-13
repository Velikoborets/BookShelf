<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::paginate(3);
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
        ]);

        Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Author created successfuly');
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author) 
    {
        $request->validate([
            'name' => 'required|max:25',
        ]);

        $author->update($request->all());
        return redirect()->route('authors.index')->with('success', 'Author update successfuly');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfuly');
    }
}
