<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $books = Book::all()->take(3);

        return view('home', ['books' => $books]);
    }

}