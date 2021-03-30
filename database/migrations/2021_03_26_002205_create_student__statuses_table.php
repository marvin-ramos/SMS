<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')
                  ->unsigned()
                  ->nullable()
                  ->on('students')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('student_class_id')
                  ->unsigned()
                  ->nullable()
                  ->on('student__classes')
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
        Schema::dropIfExists('student__statuses');
    }
}
