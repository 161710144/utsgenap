<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinetronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinetrons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->unique();
            $table->string('tema');
            $table->string('pemeran_utama');
            $table->string('durasi');
            $table->integer('jumlah_episode');
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
        Schema::dropIfExists('sinetrons');
    }
}
