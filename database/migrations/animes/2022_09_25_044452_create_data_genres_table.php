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
        Schema::create('data_genre', function (Blueprint $table) {
            $table->id();
            $table->string('genre');
            $table->timestamps();
        });

        DB::table('data_genre')->insert(
            array(
                [
                    'genre' => 'Horror'
                ],
                [
                    'genre' => 'Comedy'
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
        Schema::dropIfExists('data_genres');
    }
};
