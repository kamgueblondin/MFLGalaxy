<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiryAidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("enquiry_aides", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("parent");
            $table->string("email");
            $table->string("number");
            $table->text("message");
            $table->string("age");
            $table->string("grade");
            $table->string("gender");
            $table->string("choice");
            $table->string("primary_course");
            $table->string("additional_course");
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
        Schema::dropIfExists('enquiry_aides');
    }
}
