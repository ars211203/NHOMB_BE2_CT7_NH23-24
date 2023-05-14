<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = book::paginate(5);
        return view('books.index', compact('book'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('book_image')) {
            $destination_path = 'public/images/books';
            $image = $request->file('book_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('book_image')->storeAs($destination_path, $image_name);
            $data['book_image'] = $image_name;

        }
        book::create($data);
        return redirect()->route('book-index')->with('thongbao', 'Thêm người dùng thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */ 
    // public function update(Request $request,$id)
    // {
    //     $book = Book::find($id);
    //     $book->update($request->all());
    //     return redirect()->route('book-index')->with('thongbao', 'sửa thành công');
    // }
    public function update(Request $request, Book $book)
    {
        if ($book) {
            $book->book_name = $request->input('book_name');
            $book->book_author = $request->input('book_author');
            $book->book_description = $request->input('book_description');
            $book->save();
            return redirect()->route('book-index', $book->id);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book-index')->with('thongbao', 'Xóa người dùng thành công');
    }
    public function getAllBooks(){
        $book = Book::paginate(4);
        return view('welcome',compact('book'));
    }
}
