<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('blog_image', function (Blueprint $table) {
            $table->bigIncrements('blog_image_id');
            $table->bigInteger('blog_id')->unsigned()->nullable();
            $table->foreign('blog_id')->references('blog_id')->on('blog')->onDelete('cascade');
            $table->string('url')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('blog_image');
    }
}
