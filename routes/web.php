<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/books/{id}',[IndexController::class,'detail'])->name('detail');
// Route::get('/detail',function(){
//     return view('books.chitiet');
// });






Route::get('/admin', [AdminController::class, 'index']);
Route::get('/add-user', [AdminController::class, 'add'])->name('add');
//user
Route::resource('/user', UserController::class);
Route::resource('/admin', AdminController::class);

//book
Route::get('/book',[BookController::class,'index'])->name('book-index');
Route::get('/book-create',[BookController::class,'create'])->name('book-create');
Route::post('/book-store',[BookController::class,'store'])->name('books-store');
Route::delete('/book/{id}', [BookController::class,'destroy'])->name('book.destroy');
Route::get('/book/{id}',[BookController::class,'edit'])->name('books.edit');
// Route::put('/{id}',[BookController::class,'update'])->name('book.update');
Route::put('books/{book}', [BookController::class, 'update'])->name('book.update');

//chapter


Route::get('/book/{id}/chapters', [ChapterController::class, 'index'])->name('book.chapters.index');
Route::get('/book/{id}/chapters/create', [ChapterController::class, 'create'])->name('book.chapters.create');
Route::post('/books/{book_id}/chapters', [ChapterController::class, 'store'])->name('book.chapters.store');
// Route::get('/books/{id}/chapters', [ChapterController::class, 'show'])->name('book.chapters.show');
Route::delete('/book/{book_id}/chapter/{id}', [ChapterController::class,'destroy'])->name('book.chapter.destroy');
// ádassad
// Route::get('/login',function(){
//     return view('auth.login');
// })->name('login');
Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/login',[AdminController::class,'customLogin'])->name('customLogin');
Route::get('/registration',[AdminController::class,'registration'])->name('registration');
Route::get('sigout',[AdminController::class,'signOut'])->name('signOut');


//admin