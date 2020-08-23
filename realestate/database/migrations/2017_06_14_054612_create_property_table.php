<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('property', function (Blueprint $table) {
            $table->increments('property_id');
            $table->integer('user_id');
            $table->string('property_price');
            $table->string('property_location')->unique();
            $table->string('property_area');
            $table->string('property_description');
             $table->string('property_image');
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
        Schema::dropIfExists('property');
    }
}
