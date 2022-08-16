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
        Schema::create('silde_updates', function (Blueprint $table) {
            $table->id();
            $table->string('bannerimg', 200);
            $table->string('heading', 200);
            $table->string('desc', 200);
            $table->string('linktext1', 200);
            $table->string('link1', 200);
            $table->string('linktext2', 200);
            $table->string('link2', 200);
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
        Schema::dropIfExists('silde_updates');
    }
};
