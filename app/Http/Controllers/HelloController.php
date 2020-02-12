<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {

        return <<< EOF
<html>
<head>
<title>Hello/index</title>
<style>
body {font-size:16pt; color:#999; }
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これはHelloControllerのindexアクションです。</p>
</body>
</html>
EOF;
    }
}
