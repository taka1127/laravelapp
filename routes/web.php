<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// -------- 2-1 - 2-2 ----------------------------------------------------
// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.
//         </p></boby></html>';
// });
// -----------------------------------------------------------------------


// ---------- 2-3 --------------------------------------------------------
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body { font-size:20pt; color:#999; }
// h1 { font-size:120pt; text-align:right; color:#eee; margin:40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page!!</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// // Route::get('hello/', function() use ($html) {
// //     return $html;
// // });
// --------------------------------------------------------------------------

// ------------ 2-4 --- 2-5 -------------------------------------------------
// Route::get('hello/{msg?}', function ($msg='no message.') {
// $html = <<< EOF
// <html>
// <head>
// <title>こんにちは！</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>こんにちは！</h1>
//     <p>{$msg}</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

//     return $html;
// });
// ---------------------------------------------------------------

// ------------ 2-12 ---------------------------------------------
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

//シングルアクションコントローラのルート記述p42（アクションは要らずコントローラ名のみ）
// Route::get('hello', 'HelloController');

 //Request Responseのルート記述p53----------------------------------
// Route::get('hello', 'HelloController@index');


 //テンプレートエンジンのルート記述p60----------------------------------
// Route::get('hello', function(){
//     return view('hello.index'); //viewメソッド -> view('フォルダ名.ファイル名')
// });

//コントローラでテンプレートを使うp62----------------------------------
// Route::get('hello/{id?}','HelloController@index');

//---------クエリー文字列の利用p66-------------------------------------------
Route:: get( 'hello', 'HelloController@index' );
Route:: post('hello', 'HelloController@post' );