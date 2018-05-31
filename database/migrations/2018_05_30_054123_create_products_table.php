<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('currency');
            $table->float('price');
            $table->string('featured_image');
            $table->string('category_id');
            $table->string('sub_category_id');
            $table->unsignedInteger('quantity')->comment = "Total Quantity of product";
            $table->unsignedInteger('rem_quantity')->comment = "Remaining Product";
            $table->unsignedInteger('status');
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
        Schema::dropIfExists('products');
    }
}
