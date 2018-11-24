<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            
            $table->string('nama_event');
            $table->string('email')->primary();
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
            $table->string('tempat');
            $table->string('kategori');
            $table->bigInteger('no_telp');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
