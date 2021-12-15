<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class Details extends Controller
{
    public function detailsView($id){
        $booksDetails = Books::where('id',$id)->get();
        return view('booksDetails',compact('booksDetails'));
    }
}
