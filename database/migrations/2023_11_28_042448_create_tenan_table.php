<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenanTable extends Migration
{
    public function up()
    {
        Schema::create('tenan', function (Blueprint $table) {
            $table->id();
            $table->string('KodeTenan');
            $table->string('NamaTenan');
            $table->string('HP');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenan');
    }
}
