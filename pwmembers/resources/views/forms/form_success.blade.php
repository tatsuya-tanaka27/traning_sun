<!-- ///////////////////////////////
     　フォームの内容を送信できた場合 
     /////////////////////////////// -->

@extends('layouts.common')

@section('content')
    <h1>
        ◆フォーム送信成功画面建設予定地
    </h1>
<div style="margin:50px;">

  <p>{{ Auth::user()->name }} 様</p>
  <p>お問い合わせを受け付けました。<br/></p>
  <p>2~3営業日以内にご回答させていただきます。</p>   
</div>
@endsection
