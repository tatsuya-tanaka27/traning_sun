<?php
namespace app\Logic;

use App\Models\info;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Common\SampleCommon;

/**
 * サンプルロジッククラス
 * @author t_tanaka
 */
class SampleLogic
{

    /**
    * デフォルトの家計簿項目セット処理
    *
    * @param $request リクエストパラメータ
    */
    public static function setAllInfo($request)
    {
        // お知らせ情報全件分をDBから取得
        $info_data = info::all();

        // お知らせ情報全件分をセッションにセット
        $request->session()->put('info_data', $info_data);

        Log::debug('お知らせ情報全件分：' . $info_data );
    }

    /**
    * ユーザーIDに紐づく問い合わせ情報セット処理
    *
    * @param $request リクエストパラメータ
    */
    public static function setFormByUserId($request)
    {
        // お知らせ情報全件分をDBから取得
        $form_data = SampleCommon::getFormByUserId(Auth::user()->id);

        // お知らせ情報全件分をセッションにセット
        $request->session()->put('form_data', $form_data);

        Log::debug('ユーザーID：' . Auth::user()->id . '    ' .'お問い合わせ情報：' . $form_data );
    }

}


?>
