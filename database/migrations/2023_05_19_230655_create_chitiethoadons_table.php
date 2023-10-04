<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadons', function (Blueprint $table) {
        $table->id('id');     
        $table->foreignId('mahd');
        $table->foreignId('maspr');
        $table->foreignId('masp');
        $table->integer('soluong');
        $table->bigInteger('dongia');
        $table->text('phantramkm');
        $table->bigInteger('thanhtien');
        $table->bigInteger('imei');
        $table->timestamps();
        $table->softDeletes();
        
        $table->foreign('mahd')->references('id')->on('hoadons');
        $table->foreign('masp')->references('id')->on('sanphams');
        $table->foreign('maspr')->references('id')->on('chitietspriengs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadons');
    }
}
