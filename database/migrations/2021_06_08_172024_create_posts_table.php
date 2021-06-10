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
            $table->unsignedBigInteger('user_id');
            $table->string('category');
            $table->string('first name');
            $table->string('last name');
            $table->integer('phone number');
            $table->string('address');
            $table->string('description');
            $table->string('e-mail');
            $table->integer('donation amount');
            $table->date('required date');
            $table->string('patient picture');
            $table->string('med report 1');
            $table->string('med report 2');
            $table->string('med report 3');
            $table->string('med report 4');
            $table->string('med report 5');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
