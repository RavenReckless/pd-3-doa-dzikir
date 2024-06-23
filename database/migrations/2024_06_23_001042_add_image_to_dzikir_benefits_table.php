<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('manfaat_dzikirs', function (Blueprint $table) {
            $table->string('image')->nullable()->after('description');
        });
    }

    public function down()
    {
        Schema::table('manfaat_dzikirs', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
