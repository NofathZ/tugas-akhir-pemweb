<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenteeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentee', function (Blueprint $table) {
            $table->id('id_mentee');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('phoneNumber');
            $table->string('picture');
            $table->decimal('money');
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
        Schema::dropIfExists('mentee_models');
    }
}
