<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->integer("id_mentor")->references("id")->on("users")->onDelete("cascade")->nullable("false");
            $table->integer("id_mentee")->references("id")->on("users")->onDelete("cascade")->nullable("false");
            $table->integer("id_course")->references("id_course")->on("courses")->onDelete("cascade")->nullable("false");
            $table->integer("days")->nullable("false");
            $table->boolean("isValid")->nullable(); // add default value (True)
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
        Schema::dropIfExists('schedules');
    }
}
