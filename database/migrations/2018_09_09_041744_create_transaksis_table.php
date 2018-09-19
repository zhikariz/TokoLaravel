<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jumlah');
            $table->integer('user_id')->unsigned();
            $table->integer('buku_id')->unsigned();
            $table->foreign('user_id', 'fk_user_transaksi')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('buku_id', 'fk_buku_transaksi')->references('id')->on('bukus')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('transaksis');
    }
}
