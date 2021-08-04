<?php
namespace App\Http\Controllers;

use App\Logic\sampleLogic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * サンプル用のコントローラークラス
 * @author 田中
 * @return サンプル画面表示
 */
class SampleController extends Controller{

    public function index(Request $request){

        // お知らせ情報取得
        sampleLogic::setAllInfo($request);

        // ログインしているユーザー情報に紐づくお問い合わせ情報取得
        sampleLogic::setFormByUserId($request);

        var_dump($request->get('info_data'));

        return view('sample');
    }
}
?>
