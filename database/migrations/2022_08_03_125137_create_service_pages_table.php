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
            $table->string('page-slug',255);
            $table->text('meta-title');
            $table->text('meta-keyword');
            $table->text('meta-description');
            $table->text('page-name');
            $table->text ('banner-image');
            // $table->text('page-heading');
            // $table->text('page-sub-heading');
            $table->text('page-data');
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
