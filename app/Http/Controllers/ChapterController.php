<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Book;
class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id,Chapter $chapters)
    {
        $book = Book::find($id);
        $book_name = $book->book_name;
        $chapters = Chapter::all();
        return view('chapters.index',compact('id','book_name','chapters'));   
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('chapters.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $book_id)
    {
        $chapter = new Chapter($request->all());
        $chapter->book_id = $book_id;
        $chapter->save();
        return redirect()->route('book.chapters.index', $book_id);
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::find($id);
        $chapters = $book->chapters;
    
        return view('books.show', compact('book', 'chapters'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($book_id,$id)
    {
        $book = Book::find($book_id);
        $chapter = Chapter::find($id);
        if ($chapter) {
            $chapter->delete();
        }
        return redirect()->route('book.chapters.index',['id' => $book_id]);
    }
}
