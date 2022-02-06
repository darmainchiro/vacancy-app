<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applier', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('posisi');
            $table->string('tmpt_lhr');
            $table->string('tgl_lhr');
            $table->string('gender');
            $table->string('status');
            $table->string('email');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('name_pend');
            $table->string('jenjang');
            $table->string('jurusan');
            $table->string('thn_ijazah');
            $table->string('cv');
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
        Schema::dropIfExists('applier');
    }
}
