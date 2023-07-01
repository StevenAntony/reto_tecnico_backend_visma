<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division', function (Blueprint $table) {
            $table->unsignedInteger('di_id')->autoIncrement();
            $table->string('di_nombre',45)->unique();
            $table->boolean('di_estado')->default(1);
            $table->unsignedInteger('ds_id')->nullable();
            $table->unsignedInteger('di_colaborador');
            $table->string('di_embajador',100)->nullable();
            $table->unsignedInteger('di_nivel');

            $table->foreign('ds_id')->references('ds_id')->on('division_superior');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division');
    }
}
