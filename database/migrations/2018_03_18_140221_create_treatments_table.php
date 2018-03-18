<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('duration');
            $table->integer('price');
            $table->boolean('wash');
            $table->boolean('ears');
            $table->boolean('nails');
            $table->boolean('anal');
            $table->boolean('teeth');
            $table->boolean('pluck');
            $table->boolean('strip');
            $table->boolean('shave');
            $table->integer('shave_head');
            $table->boolean('shorten');
            $table->boolean('effilate');
            $table->boolean('brush');
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
        Schema::dropIfExists('treatments');
    }
}
