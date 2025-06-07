<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoodController;

// الصفحة الرئيسية - صفحة home
Route::get('/', function () {
    return view('home');
})->name('home');

// صفحة الأسئلة
Route::get('/qpage', function () {
    return view('qpage');
})->name('qpage');

// صفحة النتائج
Route::get('/resultpage', function () {
    return view('resultpage');
})->name('resultpage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');






Route::get('/questions', [MoodController::class, 'showQuestions'])->name('questions.page');
Route::post('/submit-answers', [MoodController::class, 'submitAnswers'])->name('submitAnswers');
