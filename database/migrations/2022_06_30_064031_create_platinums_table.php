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
            $table->string("diskon")->nullable();
            $table->string("nama");
            $table->integer("masa");
            $table->string("harga_lama")->nullable();
            $table->string("harga_baru");
            $table->text("deskripsi_singkat");
            $table->string("background")->nullable();
            $table->string("instansi")->nullable();
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
