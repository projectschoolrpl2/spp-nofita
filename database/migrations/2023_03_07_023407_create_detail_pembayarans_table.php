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
        Schema::create('detail_pembayaran', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();

            $table->bigInteger('id_pembayaran');
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');

            
            $table->string('bulan_bayar');

            $table->bigInteger('id_spp');
            $table->foreign('id_spp')->references('id')->on('spp');

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
        Schema::dropIfExists('detail_pembayaran');
    }
};
