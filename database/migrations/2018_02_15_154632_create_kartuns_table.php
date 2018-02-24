<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartuns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->unique();
            $table->string('channel');
            $table->string('tokoh');
            $table->string('watak');
            $table->string('singkat_cerita');
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
        Schema::dropIfExists('kartuns');
    }
}
