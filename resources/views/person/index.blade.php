@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
    インデックスページ
@endsection
    
@section('content')
    <table>
    <tr><th>Person</th><th>Board</th></tr>
    @foreach ($hasItems as $item)
        <tr>
          <td>{{$item->getData()}}</td>
          {{--  <td>@if ($item->board != null) //hasone１対１の場合
                    {{ $item->board->getData() }}
              @endif
          </td>  --}}
          <td>
          {{--  @if ($item->boards != null)  {{--hasMany１対多の場合
            <table width="100%">
            @foreach ($item->boards as $obj)
                <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
            </table>
          @endif  --}}
            <table width="100%">      {{--関係レコードの有無 p285--}}
            @foreach ($item->boards as $obj)
                <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
            </table>
          </td>
        </tr>
    @endforeach
    </table>
    <div style="margin: 10px;"></div>
    <table>
    <tr><th>Person</th></tr>
    @foreach ($noItems as $item)
        <tr>
          <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection