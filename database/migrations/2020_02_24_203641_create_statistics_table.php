<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->engine = 'MyISAM';

            $table->uuid('id')->primary();
            $table->unsignedBigInteger('link_id');
            $table->string('ip', 255);
            $table->string('country_name', 2048);
            $table->char('country_code', 2);
            $table->string('city_name', 255);
            $table->string('user_agent', 255);
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
