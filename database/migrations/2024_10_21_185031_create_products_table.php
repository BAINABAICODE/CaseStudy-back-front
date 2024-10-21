<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->string('barcode')->unique(); // Unique barcode for the product
            $table->text('description'); // Description of the product
            $table->decimal('price', 10, 2); // Price of the product
            $table->integer('quantity'); // Available quantity
            $table->string('category'); // Product category
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products'); // Drop the products table
    }
}
