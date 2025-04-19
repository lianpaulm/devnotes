<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;


Route::get('/', function () {
    return view('notes', ['notes' => Note::all()]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
