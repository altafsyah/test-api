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
        Schema::create('episode_mirror', function (Blueprint $table) {
            $table->id();
            $table->foreignId('episode_id');
            $table->foreignId('kualitas_id');
            $table->foreignId('mirror_id');
            $table->text('link_mirror');
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
        Schema::dropIfExists('episode_mirrors');
    }
};
