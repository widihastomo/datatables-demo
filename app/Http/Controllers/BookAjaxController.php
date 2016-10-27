<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Datatables;

class BookAjaxController extends Controller
{
    public function index(){
    	return view('books-ajax.index');
    }

    public function books(){
    	$books = Book::select('title','author','publisher')->get();
 
    	return Datatables::of($books)->make(true);
    }
}
