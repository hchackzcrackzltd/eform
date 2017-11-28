<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_langs', function (Blueprint $table) {
          $table->integer('form_id')->unsigned()->index();
          $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
          $table->integer('lang_id');
          $table->char('type',2);
          $table->integer('score');
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
        Schema::dropIfExists('form_langs');
    }
}
