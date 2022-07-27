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
        Schema::create('plantasia_forecasts', function (Blueprint $table) {
            $table->id();
            $table->dateTime('forecast_date');
            $table->double('forecasted_mv');
            $table->double('actual_mv');
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
        Schema::dropIfExists('plantasia_forecasts');
    }
};
