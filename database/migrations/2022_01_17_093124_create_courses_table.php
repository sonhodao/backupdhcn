<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('price');
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('thumbnail');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('teacher_id')
                    ->references('id')
                    ->on('teachers')
                    ->onDelete('cascade');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('course_categories')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}
