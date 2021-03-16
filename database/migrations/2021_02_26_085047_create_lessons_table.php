<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->integer('price')->nullable();
            $table->datetime('date')->nullable();
            $table->integer('week')->nullable();
            $table->string('url')->nullable();
            $table->string('pass')->nullable();
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->integer('teachers_id')->nullable();
            $table->integer('navis_id')->nullable();
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
        Schema::dropIfExists('lessons');
    }
}
