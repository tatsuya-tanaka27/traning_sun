
@extends('layouts.common')


@section('content')

<div class="row">
    <div class="col-3">
    <div class="sidebar_fixed">
        <div class="dropdown">
            <button type="button" id="dropdown1"
                class="btn btn-secondary dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
              年度
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdown1">
              <a class="dropdown-item" href="#">2015</a>
              <a class="dropdown-item" href="#">2016</a>
              <a class="dropdown-item" href="#">2017</a>
              <a class="dropdown-item" href="#">2018</a>
              <a class="dropdown-item" href="#">2019</a>
              <a class="dropdown-item" href="#">2020</a>
              <a class="dropdown-item" href="#">2021</a>
            </div>
          </div>
    </div>
    </div>
    <div class="col bg-light" style="height:600px">
        <br>
    PWサポートニュースバックナンバー<br><br>

    左の日付をクリックしてください。<br>
    ここに指定日付のサポートニュースが表示されます。

    </div>
    </div>


@endsection
