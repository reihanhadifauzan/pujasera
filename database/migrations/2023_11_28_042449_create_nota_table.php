<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaTable extends Migration
{
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->id(); // Assuming 'id' is auto-incrementing primary key
            $table->unsignedBigInteger('KodeTenan');
            $table->unsignedBigInteger('KodeKasir');
            $table->date('TglNota');
            $table->time('JamNota');
            $table->decimal('JumlahBelanja', 15, 2);
            $table->decimal('Diskon', 5, 2)->default(0);
            $table->decimal('Total', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nota');
    }
}
