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
            $table->string('description');
            $table->string('status');
            $table->string('meta_title');
            $table->decimal('thumbnail',8,0);
            $table->string('additional_information');
            $table->decimal('instock',8,0);
            $table->integer('company_id');
            $table->string('product_code');
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
