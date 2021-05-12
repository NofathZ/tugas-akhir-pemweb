<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id("id");
            $table->string("name")->nullable();
            $table->string("email")->nullable("false");
            $table->string("password")->nullable("false");
            $table->string("phone_number")->nullable();
            $table->binary("image")->nullable();
            $table->decimal("money")->nullable();
            $table->string("registration_link")->nullable();
            $table->string("verification_status")->nullable();

            
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
        Schema::dropIfExists('users');
    }
}
