<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_infos', function (Blueprint $table) {
            $table->id();
            $table->string('blog_image');
            $table->string('blog_title');
            $table->text('blog_description');
            $table->string('blog_tags');
            $table->string('author_name');
            $table->string('author_info');
            $table->text('author_description');
            $table->string('author_image');
            $table->string('blog_date');
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
        Schema::dropIfExists('blog_infos');
    }
}
