<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {

        // caso  eu queira filtrar só por 3 livros usar = ->take(3)
        $books = Book::all();
        $AuthUser = Auth::user();

        return view('home', ['books' => $books, 'AuthUser' => $AuthUser]);
    }

}
