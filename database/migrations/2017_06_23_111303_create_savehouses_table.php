<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image_name');
            $table->string('image_extension',10);
            $table->text('description');
            $table->string('address');
            $table->string('category_id');
            $table->unsignedInteger('city_id');
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
        Schema::dropIfExists('savehouses');
    }
}
