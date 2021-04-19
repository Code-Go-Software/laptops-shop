<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laptop_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('laptop_id')->references('id')->on('laptops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_images');
    }
}