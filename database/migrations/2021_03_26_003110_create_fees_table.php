<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
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
            $table->unsignedBigInteger('fee_types_id')
                  ->unsigned()
                  ->nullable()
                  ->on('fee__types')
                  ->onDelete('cascade');
            $table->string('fee_heading');
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
        Schema::dropIfExists('fees');
    }
}
