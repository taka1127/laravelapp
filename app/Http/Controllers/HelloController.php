<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:center; color:#eee; margin:40px 0px 50px 0px; }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt) {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

// ________________________2-11________________________________________________
// class HelloController extends Controller
// {
//     public function index() {
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/Index') . $style .
//             $body
//             . tag('h1','Index') . tag('p','this is Index page')
//             . '<a href="/hello/other">go to Other page</a>'
//             . $end;
//         return $html;
//     }

//     public function other() {
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/Other') . $style .
//             $body
//             . tag('h1','Other') . tag('p','this is Other page')
//             . '<a href="/hello">go to Index page</a>'
//             . $end;
//         return $html;
//     }
// }
// ---------------------------------------------------------------------
//シングルアクションコントローラーの記載 p49----------------------------------
// class HelloController extends Controller
// {
//     public function __invoke(){ 
//         return <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body { font-size:20pt; color:red; }
// h1 { font-size:40pt; text-align:center; color:black; margin: 40px 0px 50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Single Action</h1>
//     <p>これは、シングルアクションコントローラのアクションです。</p>
// </body>
// </html>
// EOF;
//     }
// }
// ---------------------------------------------------------------------
//RequestおよびResponse p52----------------------------------
// class HelloController extends Controller
// {
//     public function index(Request $request, Response $response)
//     {
//         $html = <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:red; }
// h1 {font-size:120pt; text-align:center; color:black; margin:50px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <h3>Request</h3>
//     <pre>{$request}</pre>
//     <h3>Response</h3>
//     <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//         $response->setContent($html);
//         return $response;
//     }
// }
// --------------------------------------------------------------
//コントローラでテンプレートを使うp62----------------------------------
// class HelloController extends Controller
// {
//     public function index()
//     {
//         return view('hello.index');
//     }
// }
// --------------------------------------------------------------
//コントローラでテンプレートを使うp63----------------------------------
// class HelloController extends Controller
// {
//     public function index($id='zero')
//     {
//         $data = [
//             'msg'=>'これはコントローラから渡されたメッセージです。',
//             'id'=>$id
//         ];
//         return view('hello.index', $data); //return view('テンプレート' , 配列);
//     }
// }
// --------------------------------------------------------------
//---------クエリー文字列の利用p66-------------------------------------------
// class HelloController extends Controller
// {
//     public function index(Request $request)
//     {
//         $data = [
//             'msg'=>'これはコントローラから渡されたメッセージです。',
//             'id'=>$request->id
//         ];
//         return view('hello.index', $data);
//     }
// }

//---------Bladeの利用p69-------------------------------------------
// class HelloController extends Controller
// {
//     public function index()
//     {
//         $data = [
//             'msg'=>'これはBladeを利用したサンプルです。',
//         ];
//         return view('hello.index', $data);
//     }
// }
//---------フォームの送信とCSRF対策p71-------------------------------------------
// class HelloController extends Controller
// {
//     public function index()
//     {
//         $data = [
//             ['name'=>'山田たろう','mail'=>'taro@yamada'],
//             ['name'=>'田中はなこ','mail'=>'hanako@flower'],
//             ['name'=>'鈴木さちこ','mail'=>'sachico@happy'],
//         ];
//         return view('hello.index',['message'=>'Hello!']);
//     }
//     public function post(Request $request)
//     {
        
//         return view('hello.index', ['msg'=>$request->msg]);
//     }
// }
//---------ミドルウェアp112-------------------------------------------
// class HelloController extends Controller
// {
//     public function index(Request $request)
//     {
//         return view('hello.index', ['data'=>$request->data]);
//     }
// }

//---------ミドルウェアp117-------------------------------------------
class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index');
    }
}
