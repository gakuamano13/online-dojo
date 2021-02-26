
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateReservesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("reserves", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('students_id')->nullable()->unsigned();
						$table->integer('lessons_id')->nullable()->unsigned();
						$table->datetime('register_date')->nullable();
						$table->datetime('change_date')->nullable();
						//$table->foreign("students_id")->references("id")->on("students");
						//$table->foreign("lessons_id")->references("id")->on("lessons");



						// ----------------------------------------------------
						// -- SELECT [reserves]--
						// ----------------------------------------------------
						// $query = DB::table("reserves")
						// ->leftJoin("students","students.id", "=", "reserves.students_id")
						// ->leftJoin("lessons","lessons.id", "=", "reserves.lessons_id")
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
                Schema::dropIfExists("reserves");
            }
        }
    