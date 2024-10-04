<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        return view('books.create_book');
    }
}
