<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpiritualMonitoringTable extends Migration
{
    public function up()
    {
        Schema::create('spiritual_monitoring', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->boolean('consistency');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spiritual_monitoring');
    }
}

