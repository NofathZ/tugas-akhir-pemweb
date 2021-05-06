<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            // $table->string("id_mentor")->primary();
            $table->id("id_mentor");
            $table->string("name")->nullable("false");
            $table->string("email")->nullable("false");
            $table->string("password")->nullable("false");
            $table->string("phone_number")->nullable("false");
            $table->string("image")->nullable("false");
            $table->string("registration_link")->nullable("false");
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
        Schema::dropIfExists('mentors');
    }
}
