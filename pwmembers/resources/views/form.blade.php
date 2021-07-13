@extends('layouts.app')

@section('content')
    <h1>
        ◆フォーム建設予定地
    </h1>
<div style="margin:50px;">

  <div class="form-group row">
    <label for="select1a" class="col-sm-1 col-form-label">お問い合わせ内容</label>
    <div class=" col-sm-8">
    <select id="select1a" class="form-control">
      <option>不具合</option>
      <option>お見積り</option>
      <option>カスタマイズのご相談</option>
      <option>その他</option>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-1 col-form-label">件名</label>
    <div class="col-sm-8">
      <input class="form-control" id="">
    </div>
  </div>

  <div class="form-group row">
    <label for="text1" class="col-sm-1 col-form-label">Text:</label>
    <div class="col-sm-8">
    <input type="text" id="text1" class="form-control" style="height:200px">
    </div>
</div>


</form>
</div>
@endsection
