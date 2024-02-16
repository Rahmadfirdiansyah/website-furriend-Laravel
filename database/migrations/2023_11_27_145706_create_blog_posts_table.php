<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('author');
            $table->text('content');
            $table->string('image_path');
            $table->date('post_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};