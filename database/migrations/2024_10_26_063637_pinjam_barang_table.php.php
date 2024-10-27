<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
    Schema::create('barang_masuk', function (Blueprint $table) {
        $table->id('id_barang');
        $table->string('nama_barang');
        $table->date('tgl_masuk');
        $table->integer('jml_masuk');
        $table->unsignedBigInteger('id_supplier'); // Define explicitly as unsignedBigInteger
        $table->foreign('id_supplier')->references('id')->on('supplier')->onDelete('cascade');
        $table->string('lokasi');
        $table->timestamps();
    });

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam_barang');
    }
};
