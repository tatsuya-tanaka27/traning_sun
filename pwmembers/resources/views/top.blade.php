


        @extends('layouts.common')


        @section('content')

        <div class="card mb-3 fluid">
            <div class="row no-gutters">
              <div class="col-lg-3">
                <img src="{{ asset('img/robot.jpg')}}" alt="">
              </div>
              <div class="col-lg-3 col-sm-12">
                <div class="card-body">
                  <h4 class="card-title">ユーザー状況</h4>
                  <p class="card-text"></p>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12">
                <div class="card-body">
                  <h4 class="card-title">お知らせ</h4>

                  <table>

                      @foreach ($data as $d)
                      <tr>
                      　  <td class="col-lg-1 col-sm-3">{{$d->updata_at}}</td>
                          <td class="col-lg-5 col-sm-9">{{$d->info_detail}}</td>

                      </tr>
                      @endforeach
                  </table>

                </div>
              </div>
            </div>
          </div>




        @endsection




