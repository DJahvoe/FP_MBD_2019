<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAksesResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akses__resources', function (Blueprint $table) {
            $table->bigIncrements('ID_Akses');
            $table->integer('ID_User');
            $table->integer('ID_Kana');
            $table->integer('ID_Kanji');
            $table->integer('Counter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akses__resources');
    }
}
