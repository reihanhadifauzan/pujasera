<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasirTable extends Migration
{
    public function up()
    {
        Schema::create('kasir', function (Blueprint $table) {
            $table->id();
            $table->string('KodeKasir');
            $table->string('Nama');
            $table->string('HP');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kasir');
    }
}
