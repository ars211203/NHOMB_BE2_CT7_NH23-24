<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Chapter;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $book = Book::all();
        $book = Book::paginate(4);
        $new_book = Book::orderBy('created_at', 'desc')->paginate(4);
        return view('welcome',compact('book','new_book'));
    }
    public function detail($id){
        $book = Book::find($id);
        $chapters = Chapter::where('book_id', $id)->get();
        return view('books.chitiet',compact('book','chapters'));
    }
}
