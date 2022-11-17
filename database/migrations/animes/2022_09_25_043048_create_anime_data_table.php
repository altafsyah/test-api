<?php

use App\Models\DataStatus;
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
        Schema::create('anime_data', function (Blueprint $table) {
            $table->id();
            $table->foreignIdfor(DataStatus::class);
            $table->string('title');
            $table->string('slug');
            $table->string('link_gambar');
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
        Schema::dropIfExists('anime_data');
    }
};
