<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag');
            $table->string('title');
            $table->string('type');
            $table->json('data');
            $table->float('rate')->index();

            $table->integer('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned();
            
            $table->integer('upvotes')->default(1);
            $table->integer('downvotes')->default(0);
            $table->integer('comments_number')->default(0);

            // approved by moderators so it can't be reported
            $table->timestamp('approved_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('news');
    }
}
