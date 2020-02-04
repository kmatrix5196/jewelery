<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('subtitle');
            $table->float('price',16,2);
            $table->float('discount',16,2);
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->integer('thumbnail');
            $table->longText('additional_information')->nullable();
            $table->integer('instock');
            $table->integer('company_id')->nullable();
            $table->string('product_code')->nullable();
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
        Schema::dropIfExists('product');
    }
}
