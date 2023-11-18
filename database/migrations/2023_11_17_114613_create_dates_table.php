<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('reservation_id')->nullable(); 

            // definire la colonna come chiave esterna
            $table->foreign('reservation_id')->references('id')->on('reservations')->nullOnDelete(); //->onDelete('cascade');



            $table->string('month');
            $table->string('day');
            $table->string('day_w');
            $table->string('time');
            $table->boolean('visible');
            $table->tinyInteger('max_res');
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
        Schema::dropIfExists('dates');
    }
};
