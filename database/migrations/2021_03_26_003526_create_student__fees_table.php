<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__fees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fee_id')
                  ->unsigned()
                  ->nullable()
                  ->on('fees')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('student_id')
                  ->unsigned()
                  ->nullable()
                  ->on('students')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('level_id')
                  ->unsigned()
                  ->nullable()
                  ->on('levels')
                  ->onDelete('cascade');
            $table->string('amount');
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
        Schema::dropIfExists('student__fees');
    }
}
