<!-- ///////////////////////////////
     　フォームの内容を送信できた場合 
     /////////////////////////////// -->

@extends('layouts.common')

@section('content')
<?php
session_start();
?>
    <h1>
        ◆フォーム送信成功
    </h1>
<div style="margin:50px;">

  <p>{{ Auth::user()->name }} 様</p>
  <p>お問い合わせを受け付けました。<br/></p>
  <p>2~3営業日以内にご回答させていただきます。</p>   
</div>

<div style="margin:50px;">
  <p>お問い合わせ内容</p>
  <p>件名</p> 
  <?php  echo $_SESSION['subject']; ?>
  <p>内容</p>
  <?php  echo $_SESSION['text'];  ?>
</div>

@endsection
