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
            $table->increments('id');
            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('sub_category_id')->nullable()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('product_sub_categories')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('tax_id')->nullable()->unsigned();
            $table->foreign('tax_id')->references('id')->on('taxes')->onDelete('cascade')->onUpdate('cascade');

            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('allow_purchase')->nullable();
            $table->string('hsn_sac_code')->nullable();
            $table->mediumText('description')->nullable();

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
