<!-- フォームの内容を送信出来なかった場合 -->

@extends('layouts.common')

@section('content')
    <h1>
        ◆フォーム送信失敗画面建設予定地
    </h1>
<div style="margin:50px;">

  <p>{{ Auth::user()->name }} 様</p>

  <p>お問い合わせ内容の送信に失敗しました。<br/></p>
  <p>お手数ですが、もう一度最初からやり直してください。<br/></p>
  <p><br/></p>
  <p>※フォーム入力画面のリンク※</p>
    
</div>
@endsection
