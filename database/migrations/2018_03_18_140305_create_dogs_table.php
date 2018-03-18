<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->integer('treatment_id')->unsigned();
            $table->integer('attribute_id')->unsigned();
            $table->integer('race_id')->unsigned();
            $table->string('name');
            $table->boolean('crossbreed');
            $table->string('sex');
            $table->string('coat');
            $table->string('coat_type');
            $table->string('size');
            $table->date('birthday');
            $table->boolean('deceased');
            $table->integer('frequency');
            $table->text('note');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('owner_id')->references('id')->on('customers');
            $table->foreign('treatment_id')->references('id')->on('treatments');
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->foreign('race_id')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
}
