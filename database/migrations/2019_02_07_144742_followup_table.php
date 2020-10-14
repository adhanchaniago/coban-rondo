<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FollowupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followup_table', function (Blueprint $table) {
            $table->increments('id_followup');
            $table->integer('id_sales');
            $table->integer('id_program');
            $table->date('tgl_followup');
            $table->string('responden');
            $table->string('respon');
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
        Schema::dropIfExists('followup_table');
    }
}
