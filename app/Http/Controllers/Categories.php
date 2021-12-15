<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class Categories extends Controller
{
    public function categoryView($id){
        $categoryDetails = Books::where('category_id',$id)->get();
        return view('categoryDetails',compact('categoryDetails'));
    }
}
