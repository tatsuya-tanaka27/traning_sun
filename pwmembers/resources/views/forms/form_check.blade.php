<!-- //////////////////////////
     　フォーム入力内容確認画面 
     ////////////////////////// -->

@extends('layouts.common')

@section('content')
<h1>
    ◆フォーム入力情報確認画面予定地
</h1>
<div style="margin:50px;">


    <div class="form-group row">
<?php session_start(); ?>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <p>{{ Auth::user()->name }} 様</p>
        </div>
        <div class="col-md-2">
            <p>お問い合わせ種別</p>
        </div>
        <div class="col-md-5">
            <p>
            <?php 
            if($_SESSION['type']==1){
              echo "不具合";
            }else if($_SESSION['type']==2){
              echo "お見積り";
            }else if($_SESSION['type']==3){
              echo "カスタマイズのご相談";
            }else{
              echo "その他";
            }
          ?>
            </p>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <p>件名</p>
        </div>
        <div class="col-md-5">
            <?php echo $_SESSION['subject']; ?>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <p>お問い合わせ内容</p>
        </div>
        <div class="col-md-5">
            <?php echo $_SESSION['text']; ?>
        </div>
    </div>
    
    <p>なんかいい感じの送信ボタン</p>

    <button class="btn btn-info">botan</button>

</div>
@endsection
