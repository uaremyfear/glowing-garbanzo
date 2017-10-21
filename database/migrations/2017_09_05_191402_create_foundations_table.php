<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoundationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foundations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foundation_name');
            $table->string('image_name');
            $table->string('image_extension');
            $table->text('description');
            $table->text('address');
            $table->timestamps();
        });

        Schema::create('category_foundation',function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('foundation_id');
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
        Schema::dropIfExists('foundations');
        Schema::dropIfExists('category_foundation');
    }
}
