<?php

namespace app\Common;

use Illuminate\Http\Request;
use App\Models\form;


/**
 * 複数の画面で使用する共通処理用クラス
 * @author t_tanaka
 */
class SampleCommon
{
    /**
    * ユーザーIDに紐づくお問い合わせ情報を取得
    *
    * @param Request $user_id ユーザーID
    * @return お問い合わせ情報
    */
    public static function getFormByUserId($user_id){
        return form::where('users_id', $user_id)->orderBy('updated_at', 'desc')->get();
    }
}
?>
