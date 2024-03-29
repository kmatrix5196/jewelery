<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversation_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('content')->nullable();
            $table->string('src')->nullable();
            $table->smallInteger('r_status')->unsigned()->nullable();
            $table->smallInteger('s_status')->unsigned()->nullable();
            $table->smallInteger('type')->unsigned()->nullable();
            $table->smallInteger('send_o_recieve')->unsigned()->nullable();
            $table->bigInteger('conv_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('conv_id')->references('conv_id')->on('conversation')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversation_detail');
    }
}
