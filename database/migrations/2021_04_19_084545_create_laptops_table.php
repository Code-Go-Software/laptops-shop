<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // The Name Of The Laptop
            $table->double('before_discount_price');
            $table->double('after_discount_price'); // Selling Price
            $table->string('company'); // Company Name
            $table->string('cpu');
            $table->string('ram');
            $table->string('hard');
            $table->string('screen_card');
            $table->string('screen_card_type');
            $table->string('screen_size');
            $table->string('cd_driver');
            $table->string('battery');
            $table->string('ports');
            $table->boolean('is_available')->default(true);
            $table->string('type'); // New Or Open Box
            $table->string('image');
            $table->integer('views');
            $table->string('description');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}
