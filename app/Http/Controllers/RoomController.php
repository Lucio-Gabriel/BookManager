<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('room.room');
    }
}