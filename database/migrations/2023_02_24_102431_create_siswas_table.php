<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->char('nisn', 10);
            $table->char('nis', 8);
            $table->string('nama',35);

            $table->bigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('grade');


            $table->string('alamat',200);
            $table->string('no_telp', 13);

            $table->bigInteger('id_spp');
            $table->foreign('id_spp')->references('id')->on('spp');

            $table->enum('jk', ['Laki-Laki','Perempuan']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
