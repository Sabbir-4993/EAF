<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->unsigned();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('image');
            $table->longText('description');
            $table->string('likes')->default(100);
            $table->string('comments')->default(100);
            $table->string('views')->default(100);
            $table->string('user_id')->unsigned();
            $table->string('date');
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
        Schema::dropIfExists('blogs');
    }
}
