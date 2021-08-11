<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanhelpdesksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanhelpdesks', function (Blueprint $table) {
            $table->id();
            $table->string('isu', 50);
            $table->string('tahap', 50);
            $table->string('keterangan', 100);
            $table->string('nama_fail')->nullable();
            $table->string('laluan_fail')->nullable();
            $table->string('bentuk')->nullable();
            $table->integer('saiz')->nullable();
            $table->string('status', 20)->nullable();
            $table->string('keterangan_vendor', 50)->nullable();
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
        Schema::dropIfExists('laporanhelpdesks');
    }
}
