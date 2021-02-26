
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateSecurityTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("security", function (Blueprint $table) {

						$table->increments('id');
						$table->string('position',255)->nullable();
						$table->integer('power')->nullable();



						// ----------------------------------------------------
						// -- SELECT [security]--
						// ----------------------------------------------------
						// $query = DB::table("security")
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
                Schema::dropIfExists("security");
            }
        }
    