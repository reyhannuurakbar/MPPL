<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image');
            $table->string('title');
            $table->string('slug');
            $table->longText('about');
            $table->longText('packages_description');
            $table->string('packages_1');
            $table->string('packages_2');
            $table->string('packages_3');
            $table->string('packages_4');
            $table->string('time');
            $table->string('location');
            $table->integer('price_booking');
            $table->softDeletes();
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
        Schema::dropIfExists('restaurant_packages');
    }
}
