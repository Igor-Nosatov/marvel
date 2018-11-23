<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperHeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick')->nullable();
            $table->string('real_name​')->nullable();
            $table->text('origin_description​')->nullable();
            $table->text('superpowers')->nullable();
            $table->string('catch_phrase')->nullable();
            $table->unsignedInteger('image_id')->nullable();
            $table->foreign('image_id')->references('id')
            ->on('heroes')->onDelete('cascade');
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
        Schema::dropIfExists('heroes');
    }
}
