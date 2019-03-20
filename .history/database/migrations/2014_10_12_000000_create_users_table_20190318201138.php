<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->boolean('active')->nullable();
            $table->boolean('bannded')->nullable();
            $table->boolean('notifiable_email');
            $table->string('user_name');
            $table->string('email');
            $table->date('email_verified_at');
            $table->string('password');
            $table->boolean('remember_token');
            $table->string('avatar');
            $table->points('points');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');


            $table->string('name');
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
