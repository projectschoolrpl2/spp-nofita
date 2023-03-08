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
        Schema::create('officer', function (Blueprint $table) {
            $table->id();
            $table->string('username', 25);
            $table->string('password', 32);
            $table->string('nama_petugas', 35);
            $table->enum('level', ['admin', 'petugas']);
            $table->enum('jk', ['Laki-Laki','Perempuan']);
            $table->string('no_telp', 13);
            $table->string('alamat', 200);
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
        Schema::dropIfExists('officer');
    }
};
