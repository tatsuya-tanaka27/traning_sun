<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form', function (Blueprint $table) {
            // カラム名の変更　textes -> texts
            // $table->renameColumn('変更前カラム名','変更後カラム名');
            $table->renameColumn('textes','texts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form', function (Blueprint $table) {
            // カラム名をもとに戻す
            //$table->renameColumn('texts','textes');
        });
    }
}