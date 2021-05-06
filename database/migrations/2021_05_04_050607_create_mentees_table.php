<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentees', function (Blueprint $table) {
            // $table->string("id_mentee")->primary();
            $table->id("id_mentee");
            $table->string("name")->nullable("false");
            $table->string("email")->nullable("false");
            $table->string("password")->nullable("false");
            $table->string("phone_number")->nullable("false");
            $table->binary("image")->nullable("false");
            $table->decimal("money")->nullable("false");
            
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('mentees');
    }
}
