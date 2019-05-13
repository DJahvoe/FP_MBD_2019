<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKanjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanjis', function (Blueprint $table) {
            $table->string('ID_Kanji',5)->unique();
            $table->string('K_Keyword',50);
            $table->string('K_Kanji',10);
            $table->string('K_StrokeDiagram',100);
            $table->string('K_Constituent',200);
            $table->string('K_StrokeCount',3);
            $table->string('K_LessonNo',5);
            $table->string('K_Story', 1000);
            $table->string('K_JouYou',3);
            $table->string('K_JLPT',3);
            $table->string('K_OnYomi',100);
            $table->string('K_KunYomi',100);
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
        Schema::dropIfExists('kanjis');
    }
}
