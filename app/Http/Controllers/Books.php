<?php

namespace App\Http\Controllers;

use App\Models\Books as ModelsBooks;
use Illuminate\Http\Request;

class Books extends Controller
{
    public function index(){
        $books = ModelsBooks::simplePaginate(10);
        return view('welcome',['bookslist' => $books]);
    }

}
