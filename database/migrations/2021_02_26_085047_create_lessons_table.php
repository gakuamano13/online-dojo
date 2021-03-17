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
            $table->string('lessons_title')->nullable();
            $table->text('lessons_text')->nullable();
            $table->integer('lessons_price')->nullable();
            $table->datetime('lessons_date')->nullable();
            $table->integer('lessons_week')->nullable();
            $table->string('lessons_url')->nullable();
            $table->string('lessons_pass')->nullable();
            $table->string('lessons_photo')->nullable();
            $table->string('lessons_video')->nullable();
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
