<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class info extends Model
{
    protected $table = 'info';
    protected $guarded = array('info_no');
    public $timestamps = true;


    public function getData()
    {
       $data = DB::table($this->table)->get();
       return $data;
    }



}
