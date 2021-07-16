@extends('layouts.common')

@section('content')
    <h1>
        ◆フォーム建設予定地
    </h1>
<div style="margin:50px;">

  <p>{{ Auth::user()->name }} 様</p>

  <div class="form-group row">
    <div class="col-sm-1"></div>
    <label for="select1a" class="col-sm-2 col-form-label">お問い合わせ種別</label>
    <div class=" col-sm-7">
    <select id="select1a" class="form-control">
      <option>不具合</option>
      <option>お見積り</option>
      <option>カスタマイズのご相談</option>
      <option>その他</option>
    </select>
    </div>

    <div class="col-sm-2"></div>
  </div>

  <div class="form-group row">
    <div class="col-sm-1"></div>
    <label for="inputPassword" class="col-sm-2 col-form-label">件名</label>
    <div class="col-sm-7">
      <input class="form-control" id="">
    </div>
    <div class="col-sm-2"></div>
  </div>

  <div class="form-group row">
    <div class="col-sm-1"></div>
    <label for="text1" class="col-sm-2 col-form-label">お問い合わせ内容</label>
    <div class="col-sm-7">
    <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="col-sm-2"></div>
</div>
</form>

<div class="form-group row">
<div class="col-sm-4"></div>

<button type="button" class="btn btn-info col-sm-3">送　　　信</button>

</div>
@endsection
