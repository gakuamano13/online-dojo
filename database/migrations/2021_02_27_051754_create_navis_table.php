<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('email',255)->unique();
            $table->integer('flag')->nullable();
            $table->string('login_id',255)->nullable();
            $table->string('pass',255)->nullable();
            $table->integer('tel')->nullable();
            $table->string('photo')->nullable();
            $table->datetime('register_date')->nullable();
            $table->datetime('change_date')->nullable();
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
        Schema::dropIfExists('navis');
    }
}
