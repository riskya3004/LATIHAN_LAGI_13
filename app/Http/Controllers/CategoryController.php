<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function filtercategoryindex ($id) {
        // $category = Category::find($id)->Book;
        $books = Book::where('category_id','=',$id)->get();



        return view('category', compact('books'));
    }
}
