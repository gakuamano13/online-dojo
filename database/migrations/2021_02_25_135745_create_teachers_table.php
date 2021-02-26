
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateTeachersTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("teachers", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name',255)->nullable();
						$table->string('email',255);
						$table->integer('flag')->nullable();
						$table->string('login_id',255);
						$table->string('pass',255);
						$table->integer('tel')->nullable();
						$table->text('photo')->nullable();
						$table->datetime('register_date')->nullable();
						$table->datetime('change_date')->nullable();
						$table->unique('email');



						// ----------------------------------------------------
						// -- SELECT [teachers]--
						// ----------------------------------------------------
						// $query = DB::table("teachers")
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
                Schema::dropIfExists("teachers");
            }
        }
    