<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // アクションメソッドの追加
    public function post(Request $request) {
        // viewsフォルダのpostファイルに$dataを渡しつつページを表示する
        return view('post', $data);
    }

    public function create(Request $request){
        // formの値を取得し、$paramに代入
        $param = [
            'user_id' => Auth::user()->name,
            'type' => $request->type,
            'subject' => $request->subject,
            'text' => $request->text,
        ];
        //DBに接続し、データを挿入
        DB::insert('insert into dbo.form (users_id, subjects, textes, types, statuses, created_at)
                    values (:user_id, :type, :subject, :text, 0, NOW())', $param);
        return redirect('/');
    }
}
