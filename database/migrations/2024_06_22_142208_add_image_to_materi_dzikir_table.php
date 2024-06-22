<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToMateriDzikirTable extends Migration
{
    public function up()
    {
        Schema::table('materi_dzikir', function (Blueprint $table) {
            $table->string('image')->nullable()->after('content');
        });
    }

    public function down()
    {
        Schema::table('materi_dzikir', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
