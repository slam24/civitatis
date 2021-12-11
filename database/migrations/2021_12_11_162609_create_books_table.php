<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('adult_number');
            $table->integer('child_number');
            $table->date('date');
            $table->date('date_activity');
            $table->unsignedBigInteger('id_activities');
            $table->foreign('id_activities')->references('id')->on('activities');
            $table->unsignedBigInteger('id_customers');
            $table->foreign('id_customers')->references('id')->on('customers');
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
        Schema::dropIfExists('books');
    }
}
