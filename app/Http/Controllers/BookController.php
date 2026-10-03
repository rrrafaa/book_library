<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = ['Buku 1', 'Buku 2', 'Buku 3'];
        return view('books.index', [
            'books' => $books
        ]);
    }


}
