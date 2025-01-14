<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\News;

Route::get('/news/create-test', function () {
    $news = new News();
    $news->title = 'Test news title';
    $news->body = 'Test news body';
    $news->save();

    return $news;
});
Route::get('news/{id}/hide', function ($id) {
    $news = News::findOrFail($id);
    $news->hidden = true;
    $news->save();
    // Вызовите событие NewsHidden.

    return 'News hidden';
});


