<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_infos', function (Blueprint $table) {
            $table->id();
            $table->string('about_image1');
            $table->string('about_title1');
            $table->text('about_message1');
            $table->string('about_image2');
            $table->string('about_title2');
            $table->text('about_message2');
            $table->string('button_link');
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
        Schema::dropIfExists('about_us_infos');
    }
}
