<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
public function getIndex(){

  
    return view('Index');
}

public function getData(){

   $books=Book::all();

   return response()->json(['books'=>$books]);
   
}



}
