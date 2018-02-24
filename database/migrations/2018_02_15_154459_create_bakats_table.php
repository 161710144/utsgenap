<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->unique();
            $table->string('peserta');
            $table->string('bakat');
            $table->string('tayang');
            $table->integer('voting');
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
        Schema::dropIfExists('bakats');
    }
}
