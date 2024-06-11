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
            $table->string('no_telepon');
            $table->string('alamat');
            $table->decimal('total_harga', 15, 2);
            $table->enum('status', ['sedang dibuat', 'sedang diantar', 'pesanan sukses']);
            $table->string('pembayaran');
            $table->timestamp('tanggal_pemesanan');
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