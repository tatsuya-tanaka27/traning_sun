


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
                  <p class="card-text" style="height:150px; overflow-y: scroll"></p>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12">
                <div class="card-body">
                  <h4 class="card-title">お知らせ</h4>
                <div class="table-box" style="height:150px; overflow-y: scroll">
                  <table>

                    @foreach ($data as $d)
                    <tr>
                    　  <td class="col-lg-2 col-sm-3">{{$d->updated_at}}</td>
                        <td class="col-lg-4 col-sm-9">{{$d->info_detail}}</td>

                    </tr>
                    @endforeach
                </table>
               </div>
                </div>
              </div>
            </div>
          </div>




        @endsection




