<!-- フォームの内容を送信出来なかった場合 -->

@extends('layouts.common')

@section('content')
    <h1>
        ◆フォーム送信失敗画面建設予定地
    </h1>
<div style="margin:50px;">

  <p>{{ Auth::user()->name }} 様</p>

  <p>失敗</p>
    
</div>
@endsection
