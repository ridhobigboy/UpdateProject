<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisionerKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisioner_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nim');
            $table->integer('kelas_id');
            $table->integer('pertanyaan_id');
            $table->integer('jawaban_id');
            $table->char('jawaban_text');
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
        Schema::dropIfExists('kuisioner_kelas');
    }
}
