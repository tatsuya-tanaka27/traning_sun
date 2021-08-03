<!-- //////////////////////////////
      フォーム入力画面
            ↓
      入力内容確認画面
      　    ↓
      送信完了画面 (or 送信失敗画面)
     /////////////////////////////// -->

<!-- //////////////////
     　フォーム入力画面 
     //////////////////-->

@extends('layouts.common')

@section('content')

<div style="margin:50px;">
<!-- 大枠row -->
  <div class="form-group row">
    <div class="col-sm-1"></div>
    <div class="col-sm-2">
      <p>{{ Auth::user()->name }} 様</p>
    </div>
  </div>

  <!-- フォームrow -->
  <form method="POST" action="insert">
    @csrf
    <div class="form-group row">
      <div class="col-md-1"></div>
      <div class="col-md-10">

        <!-- お問い合わせ種別 -->
        <div class="form-group row">
          <div class="col-md-1"></div>
          <label for="select1a" class="col-md-2 col-form-label">お問い合わせ種別</label>
          <div class=" col-md-7">
            <select id="type" name="type" class="form-control">
              <option value="1">不具合</option>
              <option value="2">お見積り</option>
              <option value="3">カスタマイズのご相談</option>
              <option value="4">その他</option>
            </select>
          </div>
          <div class="col-md-1"></div>
        </div>

        <!-- 件名 -->
        <div class="form-group row">
          <div class="col-md-1"></div>
          <label for="inputPassword" class="col-md-2 col-form-label">件名</label>
          <div class="col-md-7">
            <input class="form-control" id="subject" name="subject">
          </div>
          <div class="col-md-1"></div>
        </div>

        <!-- お問い合わせ内容 -->
        <div class="form-group row">
          <div class="col-md-1"></div>
          <label for="text1" class="col-md-2 col-form-label">お問い合わせ内容</label>
          <div class="col-md-7">
            <textarea class="form-control" rows="3" id="text" name="text"></textarea>
          </div>
          <div class="col-sm-1"></div>
        </div>
      
        <!-- 送信ボタン -->
        <div class="form-group row">
          <div class="col-md-4"></div>
          <button type="submit" class="btn btn-info col-md-3">　確　　　認　</button>
        </div>

      </div>
      <div class="col-sm-1"></div>
    </div>
  </form>
</div>

@endsection
