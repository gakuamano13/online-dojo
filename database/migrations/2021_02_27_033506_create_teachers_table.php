<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teachers_name')->nullable();
            $table->string('teachers_email')->unique();
            $table->integer('teachers_flag')->nullable();
            $table->string('teachers_login_id')->nullable();
            $table->string('teachers_pass')->nullable();
            $table->text('teachers_tel')->nullable();
            $table->string('teachers_photo')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
