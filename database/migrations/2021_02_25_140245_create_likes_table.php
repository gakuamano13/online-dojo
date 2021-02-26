
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateLikesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("likes", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('lessons_id')->nullable()->unsigned();
						$table->integer('students_id')->nullable()->unsigned();
						//$table->foreign("lessons_id")->references("id")->on("lessons");
						//$table->foreign("students_id")->references("id")->on("students");



						// ----------------------------------------------------
						// -- SELECT [likes]--
						// ----------------------------------------------------
						// $query = DB::table("likes")
						// ->leftJoin("lessons","lessons.id", "=", "likes.lessons_id")
						// ->leftJoin("students","students.id", "=", "likes.students_id")
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
                Schema::dropIfExists("likes");
            }
        }
    