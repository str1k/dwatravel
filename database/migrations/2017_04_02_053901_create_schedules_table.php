<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('program_id');
            $table->integer('seat');
            $table->timestamp('departure')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('arrival')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('country', 50);
            $table->boolean('is_discount');
            $table->integer('adult_price');
            $table->integer('adult_discount')->nullable();
            $table->integer('child_price')->nullable();
            $table->integer('child_discount')->nullable();
            $table->integer('infant_price')->nullable();
            $table->timestamp('show_until')->default(\DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('schedules');
    }
}
