<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenawaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('penawaran_table', function (Blueprint $table) {
            $table->increments('id_penawaran');
            $table->integer('id_client');
            $table->integer('id_sales')->nullable();
            $table->integer('id_program');
            $table->date('tgl_penawaran');
            $table->date('tgl_pelaksanaan');
            $table->string('media');
            $table->string('mp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penawaran_table');
    }
}
