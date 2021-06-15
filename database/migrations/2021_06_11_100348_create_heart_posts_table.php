<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeartPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heart_posts', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Lname');
            $table->integer('Contact_no');
            $table->text('Address');
            $table->text('Description');
            $table->integer('Required_amount');
            $table->date('Required_date');
            $table->string('Profile_pic');
            $table->string('Reports');
            $table->unsignedBigInteger('User_id');
            $table->timestamps();

            $table->foreign('User_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heart_posts');
    }
}
