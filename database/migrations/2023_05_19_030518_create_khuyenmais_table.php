<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhuyenmaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmais', function (Blueprint $table) {
            $table->id('makm');
            $table->string('tenkm');
            $table->string('mota')->nullable();
            $table->integer('phantram');
            $table->timestamps();
            $table->integer('trangthai')->default('1');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmais');
    }
}
