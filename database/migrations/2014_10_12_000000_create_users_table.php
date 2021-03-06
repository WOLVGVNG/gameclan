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
            $table->boolean('banned')->nullable();
            $table->boolean('notifiable_email');
            $table->string('user_name');    // Osobiście dodałbym tutaj ->unique(), ale nie zrobiłem tego ze względu na brak unique w tym miejscu na przesłanym zdjęciu tabeli
            $table->string('email')->unique();
            $table->date('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('avatar');
            $table->integer('points');
            $table->string('steam_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('geo');
            $table->string('lang');
            $table->unsignedBigInteger('ref')->nullable();
            $table->boolean('ref_status')->nullable();
            $table->string('ref_code');     // Tutaj to samo co powyżej
            $table->timestamp('deleted_at')->nullable();
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
