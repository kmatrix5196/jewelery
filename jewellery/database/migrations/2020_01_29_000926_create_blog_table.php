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
            $table->string('title');
            $table->string('subtitle');
            $table->longText('description');
            $table->date('date');
            $table->longText('paragraph');
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
