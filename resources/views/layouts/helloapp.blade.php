<html>
<head>
  <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>@yield('title')</title>
  <style>
  body {font-size:16pt; color:blue; margin: 5px; }
  h1 { font-size:50pt; text-align:center; color:black;
        margin:20px 0px 30px 0px; letter-spacing:-4pt;}
  ul { font-size:12pt;}
  hr { margin:25px 100px; border-top:1px dashed #ddd; }
  .menutitle { font-size:14pt; font-weight:10pt; margin: 0px; }
  .content { margin:10px;}
  .footer { text-align:center; font-size:10pt; margin:10px;
      border-bottom:solid 1px #ccc; color:#ccc; }
  th {background-color: #999; color: fff; padding: 5px 10px; }
  td {border: solid 1px #aaa; color: #999; padding: 5px 10px;}
  
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  @section('menubar') {{--ページに表示されるコンテンツの区画を定義--}}
  <h2 class="menutitle">*メニュー </h2>
  <ul>
    <li>@show</li> {{--一番土台となるレイアウトでsectionを用意する場合はshow--}}
  </ul>
  <hr size="1">
  <div class="content">
  @yield('content')
  </div>
  <div class="footer">
  @yield('footer') {{--配置場所を示す--}}
  </div>
</body>
</html>