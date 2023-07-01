<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubdivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdivision', function (Blueprint $table) {
            $table->unsignedInteger('sd_id')->autoIncrement();
            $table->string('sd_nombre',45);
            $table->unsignedInteger('di_id');
            $table->foreign('di_id')->references('di_id')->on('division');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subdivision');
    }
}
