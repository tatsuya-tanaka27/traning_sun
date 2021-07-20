<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\info;

class infoController extends Controller{
//public function index(Request $request){
//    $items = DB::select('select * from info');
//    return view('top', ['items' => $items]);
//}
public function model(){
    $md = new info();
    $data = $md->getData();

    return view('top',['data' => $data]);
}
}
?>
