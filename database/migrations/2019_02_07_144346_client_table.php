<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_table', function (Blueprint $table) {
            $table->increments('id_client');
            $table->string('nama_client');
            $table->date('tgllahir_client');
            $table->string('alamat');
            $table->string('tlp_client');
            $table->string('instansi');
            $table->string('web');
            $table->string('email');
            $table->string('pic');
            $table->string('cp');
            $table->integer('cr');
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
        Schema::dropIfExists('client_table');
    }
}
