<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        // $items = Board::all();
        $items = Board::with('person')->get();//p286 n+1問題解消
        return view('board.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }
}
