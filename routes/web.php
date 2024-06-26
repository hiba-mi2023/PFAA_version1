<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'displayNotes'])->name('notes.display-note');
Route::get('/notes/create', [NoteController::class, 'addNote'])->name('notes.add');
Route::post('/notes', [NoteController::class, 'storeNote'])->name('notes.store');
// Route::get('/notes/{id}', [NoteController::class, 'show'])->name('note.detail');
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('note.detail');

Route::get('/login', function () {
    // Define your login logic here
})->name('login');

Route::get('/user-page', [UserController::class, 'userPage'])->name('user.page');
Route::post('/notes/{note}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/notes/{id}/rate', 'NoteController@rate')->name('note.rate');
// Route::get('/user/{id}', 'UserController@show')->name('display-user');
Route::get('/user/{id}', 'UserController@userPage')->name('display-user');


Route::get('/user-page', function () {
    return view('notes.display-user');
});
// $(document).ready(function() {
        //     $('.user-icon').on('click', function() {
        //         console.log("User icon clicked");
        //         window.location.href = "{{ route('user.page') }}";
        //     });
        // });
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::post('/user/register', [RegisterController::class, 'register'])->name('user.register');

        

Route::get('/register-user', function () {
    return view('notes.register-user');
});
        