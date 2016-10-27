<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Datatables;
use Yajra\Datatables\Html\Builder;

class BookBuilderController extends Controller
{
	public function index(Request $request, Builder $htmlBuilder)
	{
		if ($request->ajax()) {
			$books = Book::select('title','author','publisher')->get();

			return Datatables::of($books)->make(true);
		}

		$html = $htmlBuilder
		->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Judul'])
		->addColumn(['data' => 'author', 'name' => 'author', 'title' => 'Penulis'])
		->addColumn(['data' => 'publisher', 'name' => 'publisher', 'title' => 'Penerbit']);

		return view('books-builder.index', compact('html'));
	}
}
