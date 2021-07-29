<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;


class FormController extends Controller
{
    // アクションメソッドの追加
    public function post(Request $request) {
        // viewsフォルダのpostファイルに$dataを渡しつつページを表示する
        return view('post', $data);
    }

    public function insert(Request $request){
        // formの値を取得し、$paramに代入
        
        $now_time = Carbon::now();

        $param = [
            'users_id' => Auth::user()->id,
            'types' => $request->type,
            'subjects' => $request->subject,
            'textes' => $request->text,
            'statuses' => '0',
            'created_at' => $now_time,
            'updated_at' => $now_time
        ];
        //DBに接続し、データを挿入
        //DB::insert('insert into dbo.form (users_id, subjects, textes, types, statuses, created_at)
        //            values (:user_id, :type, :subject, :text, 0, NOW())', $param);

        DB::table('form')->insert($param);

        return redirect('/form/success');
    }
}