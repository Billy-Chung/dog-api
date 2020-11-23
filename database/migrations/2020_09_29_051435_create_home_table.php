<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dog_img')->comment('狗狗照片');
            $table->string('dog_name')->comment('狗狗名子');
            $table->string('dog_old')->comment('狗狗年齡');
            $table->integer('only_id')->comment('狗狗照片唯一ID');
            $table->boolean('deleted_at')->comment('刪除狀態');
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
        Schema::dropIfExists('home');
    }
}
