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
            $table->string('title',255)->nullable();
            $table->text('text')->nullable();
            $table->integer('price')->nullable();
            $table->datetime('date')->nullable();
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->integer('teachers_id')->nullable();
            $table->string('teachers_name',255)->nullable();
            $table->string('teachers_photo')->nullable();
            $table->integer('navis_id')->nullable();
            $table->string('navis_name',255)->nullable();
            $table->string('navis_photo')->nullable();
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
