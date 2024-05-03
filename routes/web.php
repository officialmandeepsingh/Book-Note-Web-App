<?php

use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\Web\NoteController;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book',function (){
    return view('livewire.add-book'); 
})->name("book.store.page")->middleware('auth');

Route::get('/notes/{bookId}',function ($bookId){
    // dd($bookId);
    return view('livewire.add-note',["bookId"=> $bookId]); 
})->name("note.store.page")->middleware('auth');


Route::middleware("auth")->group(function (){
    Route::post('/book',[BookController::class,'store'])->name("book.create");
    Route::post('/note/{book}',[NoteController::class,'store'])->name("note.create");
    // Route::post('/note/{book}',function(NoteRequest $request, $bookId){
    //     dd($bookId);

    // })->name("note.create");
});
