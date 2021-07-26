@extends('layouts.common')


@section('content')

<div class="card mb-3 fluid">
    <div class="row no-gutters">
      <div class="col-lg-3 text-center">
        <img src="{{ asset('img/16770-300x300.jpg')}}" alt="">
      </div>
      <div class="col-lg-9 col-sm-12">
        <div class="card-body">
          <h4 class="card-title text-center">※エラー※</h4>
          <p class="card-text">@yield('error')</p>
        </div>
      </div>
    </div>
      <div class="text-center">
      <p><a href="/top" class="btn btn-secondary">トップへ戻る</a></p>
      </div>
</div>

@endsection
