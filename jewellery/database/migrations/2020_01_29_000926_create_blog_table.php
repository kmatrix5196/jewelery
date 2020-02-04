<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('description')->nullable();
            $table->date('date')->nullable();
            $table->longText('paragraph')->nullable();
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->bigInteger('writer_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('cascade');
            $table->foreign('writer_id')->references('id')->on('writer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
