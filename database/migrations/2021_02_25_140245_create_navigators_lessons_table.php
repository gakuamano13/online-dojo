
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateNavigatorsLessonsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("navigators_lessons", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('navigators_id')->nullable()->unsigned();
						$table->integer('lessons_id')->nullable()->unsigned();
						//$table->foreign("navigators_id")->references("id")->on("navigators");
						//$table->foreign("lessons_id")->references("id")->on("lessons");



						// ----------------------------------------------------
						// -- SELECT [navigators_lessons]--
						// ----------------------------------------------------
						// $query = DB::table("navigators_lessons")
						// ->leftJoin("navigators","navigators.id", "=", "navigators_lessons.navigators_id")
						// ->leftJoin("lessons","lessons.id", "=", "navigators_lessons.lessons_id")
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
                Schema::dropIfExists("navigators_lessons");
            }
        }
    