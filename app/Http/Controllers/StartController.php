<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class StartController extends Controller
{
    //
    public function index()
    {
        Return view('start');
    }
}
