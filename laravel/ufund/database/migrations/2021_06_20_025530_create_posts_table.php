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
            // $table->string('Name');
            $table->string('Category');
            $table->string('NIC_number');
            // $table->integer('Age');
            $table->string('description');
            $table->integer('phone_number');
            $table->string('address');
            // $table->string('email');
            $table->integer('donation_amount');
            $table->date('required_date');
            $table->string('patient_picture');
            $table->string('med_report');
            // $table->foreign('Name')->references('name')->on('users');
            // $table->foreign('email')->references('email')->on('users');
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
        Schema::dropIfExists('posts');
    }
}
