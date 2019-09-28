<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportantDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('important_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('workshop_open')->nullable();
            $table->string('oral_open')->nullable();
            $table->string('accommodation_open')->nullable();
            $table->string('registration_open')->nullable();
            $table->string('submission_close')->nullable();
            $table->string('author_notification')->nullable();
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
        Schema::dropIfExists('important_dates');
    }
}
