<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title_english')->nullable();
            $table->string('title_frensh')->nullable();
            $table->string('title_spanish')->nullable();
            $table->string('title_deush')->nullable();
            $table->text('content_english')->nullable();
            $table->text('content_frensh')->nullable();
            $table->text('content_spanish')->nullable();
            $table->text('content_deush')->nullable();
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
        Schema::dropIfExists('galeries');
    }
}
