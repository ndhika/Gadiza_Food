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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_customer');
            $table->string('pesanan');
            $table->integer('jumlah_pesanan');
            $table->decimal('total_harga', 10, 2);
            $table->string('alamat');
            $table->string('metode_pembayaran');
            $table->enum('status', ['sedang dibuat', 'sedang diantar', 'pesanan sukses']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
