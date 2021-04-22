<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('ign');
            $table->string('bw_tag')->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('bw_team_id')->nullable();
            $table->string('bw_role')->default('Player');
            // $table->foreign('team_id')->references('id')->on('teams')->default('');
            $table->timestamp('last_online');
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
