<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platinums', function (Blueprint $table) {
            $table->id();
            $table->string("diskon");
            $table->string("nama_kelas");
            $table->integer("lama");
            $table->string("harga_lama");
            $table->string("harga_baru");
            $table->text("deskripsi_singkat");
            $table->string("background");
            $table->string("instansi");
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
        Schema::dropIfExists('platinums');
    }
};
