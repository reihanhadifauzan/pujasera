<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangNotaTable extends Migration
{
    public function up()
    {
        Schema::create('barangnota', function (Blueprint $table) {
            $table->id(); // Assuming 'id' is auto-incrementing primary key
            $table->unsignedBigInteger('KodeNota');
            $table->unsignedBigInteger('KodeBarang');
            $table->integer('JumlahBarang');
            $table->decimal('HargaSatuan', 15, 2);
            $table->decimal('Jumlah', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barangnota');
    }
}
