<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookindex() {
        $books = Book::all();

        return view('home', compact('books'));
    }

    public function detailbookindex ($id) {
        $books = Book::find($id);

        return view('bookdetail', compact('books'));
    }

}
