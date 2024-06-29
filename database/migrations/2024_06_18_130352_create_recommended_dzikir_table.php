<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendedDzikirTable extends Migration
{
    public function up()
    {
        Schema::create('recommended_dzikir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materi_dzikir_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recommended_dzikir');
    }
}
