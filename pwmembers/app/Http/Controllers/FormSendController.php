<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSendController extends Controller
{
    //
    public function insert(Request $request){
        // formの値を取得し、$paramに代入
        
        session_start();

        $now_time = Carbon::now();

        $param = [
            'users_id' => Auth::user()->id,
            'types' => $_SESSION['type'],
            'subjects' => $_SESSION['subject'],
            'texts' => $_SESSION['text'],
            'statuses' => '0',
            'created_at' => $now_time,
            'updated_at' => $now_time
        ];


        // DBに書き込み
        DB::table('form')->insert($param);

        // 入力成功画面への遷移
        return redirect('/form/success');
    }
}
