<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTrnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_trns', function (Blueprint $table) {
          $table->integer('form_id')->unsigned()->index();
          $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->integer('no');
            $table->string('name')->nullable();
            $table->text('ins')->nullable();
            $table->text('cr')->nullable();
            $table->text('dr')->nullable();
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
        Schema::dropIfExists('form_trns');
    }
}
