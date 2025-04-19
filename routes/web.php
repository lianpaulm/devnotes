<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;


Route::get('/', function () {
    return view('notes', ['notes' => Note::all()]);
});

Route::get('/notes/{id}', function ($id){
    $note = Note::find($id);
    return view('note', ['note' => $note]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
