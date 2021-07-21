<!-- フォーム入力画面で入力した情報を確認する。 -->@extends('layouts.common')

@section('content')
<h1>
    ◆フォーム入力情報確認画面予定地
</h1>
<div style="margin:50px;">


    <div class="form-group row">

        <div class="col-md-1"></div>
        <div class="col-md-2">
            <p>{{ Auth::user()->name }} 様</p>
        </div>
        <div class="col-md-2">
            <p>お問い合わせ種別</p>
        </div>
        <div class="col-md-5">
            <p>xxxxxxx</p>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <p>件名</p>
        </div>
        <div class="col-md-5">
            <p>xxxxxxxxxxxxxxxxxxx</p>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <p>お問い合わせ内容</p>
        </div>
        <div class="col-md-5">
            <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
        </div>
    </div>
    
    <p>なんかいい感じの送信ボタン</p>

</div>
@endsection
