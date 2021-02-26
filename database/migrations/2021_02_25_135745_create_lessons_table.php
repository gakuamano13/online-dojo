
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateLessonsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("lessons", function (Blueprint $table) {

						$table->increments('id');
						$table->string('title',255)->nullable();
						$table->text('text')->nullable();
						$table->integer('price')->nullable();
						$table->datetime('date')->nullable();
						$table->text('photo')->nullable();
						$table->integer('teachers_id')->nullable();
						$table->string('teachers_name',255)->nullable();
						$table->text('teachers_photo')->nullable();
						$table->integer('navigators_id')->nullable();
						$table->string('navigators_name',255)->nullable();
						$table->text('navigators_photo')->nullable();
						$table->datetime('register_date')->nullable();
						$table->datetime('change_date')->nullable();



						// ----------------------------------------------------
						// -- SELECT [lessons]--
						// ----------------------------------------------------
						// $query = DB::table("lessons")
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
                Schema::dropIfExists("lessons");
            }
        }
    