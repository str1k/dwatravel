<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('content')->nullable();
            $table->string('ceo_pic', 90)->nullable();
            $table->string('ceo_name', 90)->nullable();
            $table->string('cert_pic1', 90)->nullable();
            $table->string('cert_pic2', 90)->nullable();
            $table->string('cert_pic3', 90)->nullable();
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
        Schema::dropIfExists('about_uses');
    }
}
