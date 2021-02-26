
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateMasterTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("master", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name',255)->nullable();
						$table->string('email',255)->nullable();
						$table->string('pass',255)->nullable();
						$table->integer('flag')->nullable();



						// ----------------------------------------------------
						// -- SELECT [master]--
						// ----------------------------------------------------
						// $query = DB::table("master")
						// ->get();
						// dd($query); //For checking



                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("master");
            }
        }
    