<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            // $table->string('first_name');
            // $table->string('last_name');
            $table->integer('phone_number');
            $table->string('description');
            $table->string('address');
            // $table->string('email');
            $table->integer('donation_amount');
            $table->date('required_date');
            $table->string('patient_picture');
            $table->string('med_report');

            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
