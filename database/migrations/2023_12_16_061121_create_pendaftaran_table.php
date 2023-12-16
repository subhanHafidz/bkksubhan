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
        Schema::create('pendaftaran', function (Blueprint $table) {
                $table->id();
                $table->string('nis')->unique();
                $table->string('nama');
                $table->enum('jk',['Laki-laki','Perempuan']);
                $table->enum('jurusan',['RPL','TKJ','MM','DPIB','Teklin','TBSM','TKRO']);
                $table->date('tgl_lahir');
                $table->text('alamat');
                $table->string('telepon');
                $table->string('thn_ajaran');
                $table->text('posisi');
                $table->string('foto');
                $table->string('foto1');
                $table->string('cv');
                $table->string('skck');
                $table->timestamps();
            });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
