<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 90);
            $table->integer('day_count');
            $table->integer('night_count');
            $table->longText('content');
            $table->string('country', 50);
            $table->mediumText('tag_list')->nullable();
            $table->string('airline_pic', 90)->nullable();
            $table->string('tour_pic', 90)->nullable();
            $table->string('pdf', 90)->nullable();
            $table->boolean('pdf_mode');
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
        Schema::dropIfExists('programs');
    }
}
