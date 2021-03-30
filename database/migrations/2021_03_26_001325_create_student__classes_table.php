<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academic_id')
                  ->unsigned()
                  ->nullable()
                  ->on('academics')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('level_id')
                  ->unsigned()
                  ->nullable()
                  ->on('levels')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('shift_id')
                  ->unsigned()
                  ->nullable()
                  ->on('shifts')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('time_id')
                  ->unsigned()
                  ->nullable()
                  ->on('times')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('group_id')
                  ->unsigned()
                  ->nullable()
                  ->on('groups')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('batch_id')
                  ->unsigned()
                  ->nullable()
                  ->on('batches')
                  ->onDelete('cascade');
            $table->string('start_date');
            $table->string('end_date');
            $table->unsignedBigInteger('active_id')
                  ->unsigned()
                  ->nullable()
                  ->on('actives')
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
        Schema::dropIfExists('student__classes');
    }
}
