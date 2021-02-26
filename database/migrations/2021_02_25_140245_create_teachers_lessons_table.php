
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateTeachersLessonsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("teachers_lessons", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('teachers_id')->nullable()->unsigned();
						$table->integer('lessons_id')->nullable()->unsigned();
						

                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        //$table->foreign("teachers_id")->references("id")->on("teachers");
						//$table->foreign("lessons_id")->references("id")->on("lessons");



						// ----------------------------------------------------
						// -- SELECT [teachers_lessons]--
						// ----------------------------------------------------
						// $query = DB::table("teachers_lessons")
						// ->leftJoin("teachers","teachers.id", "=", "teachers_lessons.teachers_id")
						// ->leftJoin("lessons","lessons.id", "=", "teachers_lessons.lessons_id")
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
                Schema::dropIfExists("teachers_lessons");
            }
        }
    