<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormBroSesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_bro_ses', function (Blueprint $table) {
            $table->integer('form_id')->unsigned()->index();
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->integer('no');
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->text('op')->nullable();
            $table->text('ao')->nullable();
            $table->string('tel')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('form_bro_ses');
    }
}
