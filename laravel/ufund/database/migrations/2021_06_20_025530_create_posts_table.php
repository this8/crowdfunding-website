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
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('NIC_number');
            $table->integer('Age');
            $table->string('description');
            $table->integer('phone_number');
            $table->string('address');
            $table->integer('donation_amount');
            $table->date('required_date');
            $table->string('patient_picture');
            $table->string('med_report');
            $table->string('bank_account_no');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
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
