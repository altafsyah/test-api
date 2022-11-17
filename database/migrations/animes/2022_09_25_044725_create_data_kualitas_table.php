<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kualitases', function (Blueprint $table) {
            $table->id();
            $table->string('kualitas');
            $table->timestamps();
        });

        DB::table('data_kualitases')->insert(
            array(
                [
                    'kualitas' => '240p'
                ],
                [
                    'kualitas' => '360p'
                ],
                [
                    'kualitas' => '480p'
                ],
                [
                    'kualitas' => '720p'
                ],
                [
                    'kualitas' => '10800p'
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kualitases');
    }
};
