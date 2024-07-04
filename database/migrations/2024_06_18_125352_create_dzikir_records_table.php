<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDzikirRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('dzikir_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materi_dzikir_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dzikir_records');
    }
}

