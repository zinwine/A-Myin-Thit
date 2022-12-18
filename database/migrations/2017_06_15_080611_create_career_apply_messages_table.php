<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerApplyMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_apply_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Email');
            $table->text('Address');
            $table->text('Ph_No');
            $table->text('Job_Position');
            $table->text('Gender');
            $table->text('Description');
            $table->text('Image');
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
        Schema::dropIfExists('career_apply_messages');
    }
}
