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
        Schema::create('Users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('user');
            $table->string('nama');
            $table->string('username')->unique()->nullable();;
            $table->string('no_telepon')->nullable();;
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('alamat_lengkap')->nullable();;
            $table->string('photo')->nullable();
            $table->string('slug_link')->nullable();
            $table->enum('status_aktif', ['Aktif', 'Hapus']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
