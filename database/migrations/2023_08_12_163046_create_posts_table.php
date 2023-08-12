<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('content')->nullable();
            $table->string('cover_image')->nullable();
            $table->text('link')->nullable();
            $table->enum('type', ['FAQ', 'HELP', 'PRIVACY_POLICY', 'YOUTUBE', 'TERM_CONDITION'])->default('HELP');
            $table->integer('views')->default(0);
            $table->tinyInteger('published')->default(0);
            $table->dateTime('published_at')->nullable();
            $table->bigInteger('created_by')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
