<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeepSeekController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/process-fixed-document', [DeepSeekController::class, 'processFixedDocument']);
Route::get('/deep-chat', function () {
    return view('deepseek-chat-blade');
});
