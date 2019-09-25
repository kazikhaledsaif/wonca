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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('designation');
            $table->string('organization');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('mobile');
            $table->string('phone');
            $table->string('accompany');
            $table->string('accompany_person');
            $table->string('reg_category');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
