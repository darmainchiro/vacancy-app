<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpWork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_work', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_applier');
            $table->string('name_perusahaan');
            $table->string('jabatan');
            $table->string('deskripsi');
            $table->string('tahun_in');
            $table->string('tahun_out');
            $table->timestamps();
            $table->foreign('id_applier')->references('id')->on('applier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exp_work');
    }
}
