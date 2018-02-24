<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntertaimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertaiments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->unique();
            $table->string('host');
            $table->string('selebriti');
            $table->string('kabar');
            $table->string('riwayat');
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
        Schema::dropIfExists('entertaiments');
    }
}
