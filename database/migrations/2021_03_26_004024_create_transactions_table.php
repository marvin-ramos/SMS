<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->datetime('transaction_date');
            $table->unsignedBigInteger('fee_id')
                  ->unsigned()
                  ->nullable()
                  ->on('fees')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('user_id')
                  ->unsigned()
                  ->nullable()
                  ->on('users')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('student_id')
                  ->unsigned()
                  ->nullable()
                  ->on('students')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('student_fee_id')
                  ->unsigned()
                  ->nullable()
                  ->on('student__fees')
                  ->onDelete('cascade');
            $table->string('paid');
            $table->text('remarks');
            $table->text('description');
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
        Schema::dropIfExists('transactions');
    }
}
