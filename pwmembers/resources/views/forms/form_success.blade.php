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

<!-- お問い合わせ内容の表示 -->
  <div class="form-group row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

      <!-- お問い合わせ種別 -->
      <div class="form-group row">
        <div class="col-md-1"></div>
        <label for="select1a" class="col-md-2 col-form-label">お問い合わせ種別</label>
        <div class=" col-md-7">
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
        </div>
        <div class="col-md-1"></div>
      </div>

      <!-- 件名 -->
      <div class="form-group row">
        <div class="col-md-1"></div>
        <label for="inputPassword" class="col-md-2 col-form-label">件名</label>
        <div class="col-md-7">
          <?php echo $_SESSION['subject']; ?>
        </div>
        <div class="col-md-1"></div>
      </div>

      <!-- お問い合わせ内容 -->
      <div class="form-group row">
        <div class="col-md-1"></div>
        <label for="text1" class="col-md-2 col-form-label">お問い合わせ内容</label>
        <div class="col-md-7">
          <?php echo $_SESSION['text']; ?>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>

@endsection
