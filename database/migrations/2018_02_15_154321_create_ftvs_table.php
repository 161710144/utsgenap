<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFtvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ftvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->unique();
            $table->string('rilis');
            $table->string('tempat');
            $table->string('artis');
            $table->string('watak');
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
        Schema::dropIfExists('ftvs');
    }
}
