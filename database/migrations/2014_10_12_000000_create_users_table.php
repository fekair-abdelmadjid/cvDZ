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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('FamilyName')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('Wilaya')->nullable();
            $table->date('DateBirth')->nullable();
            $table->string('Adresse')->nullable();
            $table->integer('Phone')->nullable();
            $table->string('PathFac')->nullable();
            $table->string('Pathtwi')->nullable();
            $table->string('Pathgoo')->nullable();
            $table->string('photo')->default("Userphoto/default-user.png");
            $table->string('is_admin')->default(0);
            $table->dateTime('deleted_at')->nullable();
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
