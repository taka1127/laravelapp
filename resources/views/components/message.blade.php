<style>
.message { border:double 4px black; margin: 10px; padding: 10px; 
    background-color: fafafa;}
.msg_title { margin: 10px 20px; color: 999; 
    font-size: 16pt; font-weight: bold; }
.msg_content{ margin: 10px 20px; color: aaa;
    font-size: 12pt; }
</style>

<div class="message">
  <p class="msg_title">{{$msg_title}}</p>{{-- コンポーネント使用の際は変数を用意し必要な値を呼び出し元に渡さないといけない --}}
  <p class="msg_content">{{$msg_content}}</p>
</div>
