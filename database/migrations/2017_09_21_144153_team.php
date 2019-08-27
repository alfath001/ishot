<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Team extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('namaTeam');
            $table->string('namaan1')->nullable();
            $table->string('niman1')->nullable();
            $table->string('emailan1')->nullable();
            $table->string('idLinean1')->nullable();
            $table->string('namaan2')->nullable();
            $table->string('niman2')->nullable();
            $table->string('emailan2')->nullable();
            $table->string('idLinean2')->nullable();
            $table->string('resi')->nullable();
            $table->boolean('kbmsi')->default(0);
            $table->boolean('verket')->default(0);
            $table->boolean('veran')->default(0);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('teams');
    }
}
