<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('item_name');
            $table->integer('category_id');
            $table->string('region_id');
            $table->boolean('condition')->default(true)->nullable();
            $table->integer('phone');
            $table->string('description');
            $table->binary('image1');
            $table->binary('image2');
            $table->binary('image3');
            $table->decimal('price',9,3);
            $table->boolean('negotiable')->default(false)->nullable();
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
        Schema::dropIfExists('ads');
    }
}
