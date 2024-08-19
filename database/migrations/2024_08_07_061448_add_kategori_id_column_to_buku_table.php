<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('buku', function (Blueprint $table) {
            //
            $table->unsignedBiginteger('kategori_id')->required()
            ->after('nama_buku');
            //
            $table->foreign('kategori_id')->references('id')
            ->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
         //menghapus foreign class_id
         $table->dropForeign(['kategori_id']);
         //menghapus kolom
         $table->dropColumn('kategori_id');
        });
    }
};
