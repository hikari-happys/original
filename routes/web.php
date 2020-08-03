<?php

//
// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/', 'HomeController@index')->name('home');
//
//     Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
//     //getで/folders/{id}/tasksにリクエストがきたらTaskControllerのindexメソッドを呼び出す
//     //タスク一覧はフォルダごとのタスクを表示するので、どのフォルダを表示したいかによって{id}の部分が変わる
//     //ここに上記記述したら、次はTaskControllerクラスおよびindexメソッドを作成する
//
//     Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
//     Route::post('/folders/create', 'FolderController@create');
//
//     Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
//     Route::post('/folders/{id}/tasks/create', 'TaskController@create');
//
//     Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');
//
//     Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');
// });

 Auth::routes();

Route::get('index',function(){
    return view('hello.index');
});

Route::get('/index','HelloController@index');

Route::get('/company','HelloController@detail');
Route::get('/contact','HelloController@messe');
Route::get('/recruit','HelloController@recruit');
Route::get('/news','HelloController@news');


//入力ページ
Route::get('/mail', 'ContactController@index')->name('mail.index');

//確認ページ
Route::post('/mail/confirm', 'ContactController@confirm')->name('mail.confirm');

//送信完了ページ
Route::post('/mail/thanks', 'ContactController@send')->name('mail.send');
