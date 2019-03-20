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
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->date('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('avatar');
            $table->integer('points');
            $table->bigIncrements('steam_id');
            $table->bigIncrements('facebook_id');
            $table->bigIncrements('google_id');
            $table->bigIncrements('geo');
            $table->bigIncrements('lang');
            $table->bigIncrements('ref');
            $table->bigIncrements('ref_status');
            $table->bigIncrements('ref_code');
            $table->bigIncrements('delted_at');
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
