<?php

use App\Models\AnimeData;
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
        Schema::create('anime_desc', function (Blueprint $table) {
            $table->id();
            $table->foreignIdfor(AnimeData::class);
            $table->text('sinopsis');
            $table->string('tahun_rilis');
            $table->string('produser');
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
        Schema::dropIfExists('anime_descs');
    }
};
