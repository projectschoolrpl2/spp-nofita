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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->char('nisn', 10);
            $table->char('nis', 8);
            $table->string('nama',35);
            $table->integer('id_kelas')->unsigned();
            $table->string('alamat',200);
            $table->string('no_telp', 13);
            $table->integer('id_spp')->unsigned();
            $table->enum('jk', ['Laki-Laki','Perempuan']);
            $table->string('username', 35);
            $table->string('password', 32);
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
