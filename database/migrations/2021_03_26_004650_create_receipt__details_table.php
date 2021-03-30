<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt__details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('receipt_id')
                  ->unsigned()
                  ->nullable()
                  ->on('receipts')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('student_id')
                  ->unsigned()
                  ->nullable()
                  ->on('students')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('transaction_id')
                  ->unsigned()
                  ->nullable()
                  ->on('transactions')
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
        Schema::dropIfExists('receipt__details');
    }
}
