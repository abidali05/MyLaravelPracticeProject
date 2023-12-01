<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()

    {
        $books = Book::latest()->get();
        return view('Book.index', compact('books'));
    }

    public function author()

    {
        $authors = User::where('role','author')->with('books')->get();
        return view('Book.author', compact('authors'));
    }
}
