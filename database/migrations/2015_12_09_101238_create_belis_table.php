<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belis', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tgl_transaksi');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('bank');
            $table->string('no_rekening');
            $table->decimal('btc_beli', 16, 8);
            $table->string('no_hp');
            $table->string('alamat_bitcoin');
            $table->decimal('rupiah_beli', 15,2);
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
        Schema::drop('belis');
    }
}
