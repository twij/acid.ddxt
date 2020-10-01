<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoungeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lounge_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('lounge_server_id')->references('id')->on('lounge_servers');
            $table->string('username');
            $table->string('status')->default('processing');
            $table->boolean('enabled');
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
        Schema::dropIfExists('lounge_users');
    }
}
