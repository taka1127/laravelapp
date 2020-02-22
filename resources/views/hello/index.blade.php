{{--  <!-- <html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:black; }
    h1 { font-size:50pt; text-align:center; color:blue;
          margin:20px 0px -30px 0px; letter-spacing-4pt; }
    </style>
</head> -->
<!-- ---------------foreach文 ------------------------>
<!-- <body>     
  <h1>Blade/Index</h1>
  <p>&#064;foreachディレクティブの例</p>
  <ol>
  @foreach($data as $item)
  <li>{{$item}}</li>
  @endforeach
  </ol>
</body> -->
<!-- ---------------for文 ------------------------>
<!-- <body>
  <h1>Blade/Index</h1>
  <p>&#064;forディレクティブの例</p>
  <ol>
  @for($i = 1; $i < 100; $i++)
  @if ($i%2==1) 2で割って1余る（奇数の表示）
      @continue  （奇数を飛ばす）
  @elseif ($i <= 10)
  <li>NO,{{$i}}</li>
  @else
      @break
  @endif
  @endfor
  </ol>
</body> -->
<!-- ---------------$loopによるループ変数 ------------------------>
<!-- <body>
  <h1>Blade/Index</h1>
  <p>&#064;forディレクティブの例</p>
  @foreach($data as $item)
  @if ($loop->first)
  <p>*データ一覧</p>
  <ul>
  @endif
  <li>NO,{{$loop->iteration}}.{{$item}}</li>
  @if($loop->last)
  </ul>
  <p>--ここまで</p>
  @endif
  @endforeach
</body>
</html> -->

<!-- ---------------phpディレクティブとwhileディレクティブ ------------------------>
<!-- <body>
  <h1>Blade/Index</h1>
  <p>&#064;whileディレクティブの例</p>
  <ol>
  @php
  $counter = 0;
  @endphp
  @while($counter < count($data))
  <li>{{$data[$counter]}}</li>
  @php
  $counter++;
  @endphp
  @endwhile
  </ol>
</body>
</html> -->

{{--  <!-- ---------------継承レイアウト------------------------>  --}}
{{--  @extends('layouts.helloapp') 親レイアウトの継承

@section('title','Index')//セクション値にIndexというテキスト値を設定
@section('menubar')//親セクションの上書き
  @parent //親レイアウトのセクションをはめ込んで表示
  インデックスページ
@endsection

@section('content') //yieldの呼び出し
  <p>ここが本文のコンテンツです</p>
  <p>必要なだけ記述できます</p>
@endsection

@section('footer') //yieldの呼び出し
copyright 2020 tuyano.
@endsection  --}}  

{{--  <!-- ---------------コンポーネントp９１　レイアウト用の部品------------------------>  
@extends('layouts.helloapp'){{--親レイアウトの継承--}}

{{--  @section('title','Index')  {{--セクション値にIndexというテキスト値を設定
@section('menubar'){{--親セクションの上書き
  @parent {{--親レイアウトのセクションをはめ込んで表示
  インデックスページ
@endsection

@section('content') {{--yieldの呼び出し
  <p>ここが本文のコンテンツです</p>
  <p>必要なだけ記述できます</p>

  @component('components.message')
    @slot('msg_title'){{--呼び出し先の変数にはめ込まれて表示される
    CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージの表示です。            
    @endslot
  @endcomponent

@endsection

@section('footer') {{--yieldの呼び出し
copyright 2020 tuyano.
@endsection  --}}
{{--  <!-- ---------------サブビュー------------------------>  --}}  
@extends('layouts.helloapp')

@section('title','Index')  
@section('menubar')
  @parent 
  インデックスページ
@endsection



{{--  部分テンプレート部分 引数に連想配列で値の変更も可能  --}}
{{--  @section('content') 
  <p>ここが本文のコンテンツです</p>  --}}
  {{--  @include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューです'])  --}}

{{--  <!-- ---------------eachによるコレクションビュー---}}  
  {{--  @section('content') 
  <p>ここが本文のコンテンツです</p>  --}}
  {{--  <ul>
  @each('components.item', $data, 'item')
  </ul>  --}}

{{--  <!-- ---------------ビューコンポーザの利用---}}  
  {{--  @section('content') 
  <p>ここが本文のコンテンツです</p>  --}}
  {{--  <p>Controller<br>'message' = {{ $message }}</p>
  <p>ViewComposer value<br>'view_message' = {{ $view_message }}</p>  --}}

{{--  <!-- ---------------ミドルウェア---}}  
  {{--  @section('content') 
  <p>ここが本文のコンテンツです</p>  --}}
  {{--  <table>
  @foreach($data as $item)
  <tr><th>{{ $item['name'] }}</th><td>{{ $item['mail'] }}</td></tr>
  @endforeach
  </table>  --}}
{{--  <!-- ---------------ミドルウェアp117---}}
  {{--  @section('content') 
  <p>ここが本文のコンテンツです</p>  --}}
  {{--  <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
  <p>これは、<middleware>yahoo.com</middleware>へのリンクです。</p>  --}}

{{--  <!-- ---------------バリデーションp122---}}
  @section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力してくだいさい。</p>
    @endif

    <form action="/hello" method="post">
    <table>
      @csrf
      @error('name')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
      @enderror
      <tr><th>name:</th><td><input type="text"
              name="name" value="{{old('name')}}"></td></tr>

      @error('mail')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
      @enderror      
      <tr><th>mail:</th><td><input type="text"
              name="mail" value="{{old('mail')}}"></td></tr>

      @error('age')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
      @enderror
      <tr><th>age:</th><td><input type="text"
              name="age" value="{{old('age')}}"></td></tr>
      <tr><th></th><td><input type="submit"
            value="send"></td></tr>
    </table>
    </form>
  @endsection

@section('footer') 
copyright 2020 tuyano.
@endsection