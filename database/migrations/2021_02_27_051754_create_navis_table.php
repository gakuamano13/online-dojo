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
            $table->bigIncrements('navis_id');
            $table->string('navis_name')->nullable();
            $table->string('navis_email')->unique();
            $table->integer('navis_flag')->nullable();
            $table->string('navis_login_id')->nullable();
            $table->string('navis_pass')->nullable();
            $table->text('navis_tel')->nullable();
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
        Schema::dropIfExists('navis');
    }
}
