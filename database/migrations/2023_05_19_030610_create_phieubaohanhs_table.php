<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieubaohanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieubaohanhs', function (Blueprint $table) {
        $table->id('id');
        $table->foreignId('maspr');
        $table->foreignId('masp');
        $table->string('imei');
        $table->timestamps();
        $table->softDeletes();
       
        $table->foreign('masp')->references('id')->on('sanphams');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieubaohanhs');
    }
}
