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
            $table->string('no_telepon')->nullable();
            $table->string('alamat_lengkap')->nullable();
            $table->decimal('total_harga', 15, 2);
            $table->enum('status', ['sedang dibuat', 'sedang diantar', 'pesanan sukses']);
            $table->enum('status_aktif', ['Aktif', 'Hapus']);
            $table->string('pembayaran');
            $table->timestamp('tanggal_pemesanan');
            $table->timestamps();
            $table->softDeletes(); // Add soft deletes
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