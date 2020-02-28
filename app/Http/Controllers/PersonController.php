<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all(); //全レコード取得
        return view('person.index', ['items' => $items]);
    }
    public function find(Request $request)
    {
        return view('person.find',['input' => '']);
    }
    public function search(Request $request)
    {
        // $item = Person::find($request->input); //IDによるレコード検索
        // $item = Person::where('name',$request->input)->first();//whereによる検索（$変数=モデルクラス::where(フィールド名,値）->first();か->get();
        // $item = Person::nameEqual($request->input)->first();//スコープによる検索p250
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

    public function add
    
}
