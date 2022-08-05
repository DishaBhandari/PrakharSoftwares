<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id');
            $table->text('meta_title');
            $table->text('meta_keyword');
            $table->text('meta_description');
            $table->text('page_name');
            $table->text ('banner_image');
            // $table->text('page_heading');
            // $table->text('page_sub-heading');
            $table->text('page_data');
            $table->enum('status',['0','1'])->default('1')->comment('0=Inactive, 1=Active');
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
        Schema::dropIfExists('service_pages');
    }
};
