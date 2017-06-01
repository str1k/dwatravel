<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('program_id', 200);
            $table->timestamp('departure')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('adult')->nullable();
            $table->integer('children_bed')->nullable();
            $table->integer('children_no_bed')->nullable();
            $table->integer('infant')->nullable();
            $table->integer('single_room')->nullable();
            $table->integer('join_land')->nullable();
            $table->string('customer_name', 200);
            $table->string('customer_tel', 50);
            $table->string('customer_email', 100);
            $table->string('customer_passport', 100);
            $table->mediumText('customer_more')->nullable();
            $table->integer('adult_price')->nullable();
            $table->integer('children_bed_price')->nullable();
            $table->integer('children_no_bed_price')->nullable();
            $table->integer('infant_price')->nullable();
            $table->integer('single_room_price')->nullable();
            $table->integer('join_land_price')->nullable();
            $table->boolean('confirm')->nullable();
            $table->boolean('cancel')->nullable();
            $table->integer('discount')->nullable();
            $table->timestamps();
        });
    DB::update("ALTER TABLE bookings AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
