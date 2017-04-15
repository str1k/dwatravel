<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_bars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('autorize', 100);
            $table->string('telphone', 20);
            $table->string('email', 100);
            $table->string('line', 100);
            $table->string('line_link', 100);
            $table->string('line_url', 100);
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
        Schema::dropIfExists('contact_bars');
    }
}
