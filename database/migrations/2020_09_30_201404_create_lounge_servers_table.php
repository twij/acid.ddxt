<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoungeServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lounge_servers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('base_url');
            $table->string('ssh_user');
            $table->string('ssh_pass');
            $table->integer('ssh_port')->default(22);
            $table->string('lounge_folder');
            $table->string('public_address');
            $table->boolean('status')->default('open');
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
        Schema::dropIfExists('lounge_servers');
    }
}
