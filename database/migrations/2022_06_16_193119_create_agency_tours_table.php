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
        Schema::create('agency_tours', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('agency_id')->unsigned();
            $table->bigInteger('tour_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_tours');
    }
};
