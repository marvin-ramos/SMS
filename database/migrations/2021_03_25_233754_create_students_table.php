<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->date('birthday');
            $table->unsignedBigInteger('gender_id')
                  ->unsigned()
                  ->nullable()
                  ->on('genders')
                  ->onDelete('cascade');
            $table->text('address');
            $table->unsignedBigInteger('status_id')
                  ->unsigned()
                  ->nullable()
                  ->on('statuses')
                  ->onDelete('cascade');
            $table->string('contact_number');
            $table->unsignedBigInteger('nationality_id')
                  ->unsigned()
                  ->nullable()
                  ->on('nationalities')
                  ->onDelete('cascade');
            $table->string('rac');
            $table->string('passport');
            $table->unsignedBigInteger('village_id')
                  ->unsigned()
                  ->nullable()
                  ->on('villages')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('community_id')
                  ->unsigned()
                  ->nullable()
                  ->on('communities')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('district_id')
                  ->unsigned()
                  ->nullable()
                  ->on('districts')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('province_id')
                  ->unsigned()
                  ->nullable()
                  ->on('provinces')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('city_id')
                  ->unsigned()
                  ->nullable()
                  ->on('cities')
                  ->onDelete('cascade');
            $table->string('profile');
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
        Schema::dropIfExists('students');
    }
}
