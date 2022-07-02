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
        Schema::create('kelas_pembelajaran', function (Blueprint $table) {
            $table->integer("pembelajaran_id")->unsigned()->foreign("pembelajaran_id")->references("id")->on("pembelajarans")->onDelete("cascade");
            $table->integer("kelas_id")->unsigned()->foreign("kelas_id")->refenreces("id")->on("kelas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_pembelajaran');
    }
};
