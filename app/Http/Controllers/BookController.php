<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        return view('books.create_book');
    }

    public function create_action(Request $request)
    {

        // dd($request->only('title', 'description'));

        $book = $request->only('title', 'description');

        $book['user_id'] = 1;

        $bookCreated = Book::create($book);

        // dd($userCreated);
        return redirect(route('home'));
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        // dd($id);

        $book = Book::find($id);
        if (!$book){
            return redirect(route('home'));
        }

        $data['book'] = $book;

        return view('books.edit_book', $data);
    }

    public function edit_action(Request $request)
    {


        $request_data = $request->only(['title', 'description']);

        $book = Book::find($request->id);

        if(!$book){
            return 'Erro de livro não existente';
        }


        $book->update($request_data);
        $book->save();
        return redirect(route('home'));
        
    }


    public function delete(Request $request)
    {
        $id = $request->id;

        $book = Book::find($id);

        if($book){
            $book->delete();
        }

        return redirect(route('home'));

    }
}