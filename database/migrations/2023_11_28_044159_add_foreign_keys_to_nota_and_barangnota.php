<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNotaAndBarangNota extends Migration
{
    public function up()
    {
        Schema::table('nota', function (Blueprint $table) {
            $table->foreign('KodeTenan')->references('id')->on('tenan');
            $table->foreign('KodeKasir')->references('id')->on('kasir');
        });

        Schema::table('barangnota', function (Blueprint $table) {
            $table->foreign('KodeNota')->references('id')->on('nota');
            $table->foreign('KodeBarang')->references('id')->on('barang');
        });
    }

    public function down()
    {
        Schema::table('nota', function (Blueprint $table) {
            $table->dropForeign(['KodeTenan']);
            $table->dropForeign(['KodeKasir']);
        });

        Schema::table('barangnota', function (Blueprint $table) {
            $table->dropForeign(['KodeNota']);
            $table->dropForeign(['KodeBarang']);
        });
    }
}
