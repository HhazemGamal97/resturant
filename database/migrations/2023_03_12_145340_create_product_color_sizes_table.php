<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_size_id');
            $table->foreign('product_size_id')
            ->references('id')
            ->on('product_sizes')->onDelete('cascade');
            $table->unsignedBigInteger('product_color_id');
            $table->foreign('product_color_id')
            ->references('id')
            ->on('product_colors')
            ->onDelete('cascade');
            $table->integer('quantity');
            $table->double('price_two')->nullable();
            $table->double('discount')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('product_color_sizes');
    }
};
