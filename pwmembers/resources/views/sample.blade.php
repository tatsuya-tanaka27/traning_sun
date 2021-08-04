


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
                  @if(count(Session::get('info_data')) > 0)
                    <div class="">
                        <table id="" class="">
                            <tbody id="" class="" align="" nowrap>
                                @foreach(Session::get('info_data') as $info_data)
                                    <tr>
                                        <td>{{$info_data->updated_at}}</td>
                                        <td>{{$info_data->info_detail}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
              </div>
            </div>
        </div>




        @endsection




