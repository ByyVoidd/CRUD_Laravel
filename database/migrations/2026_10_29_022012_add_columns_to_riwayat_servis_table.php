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
        Schema::table('riwayat_servis', function (Blueprint $table) {
            $table->foreignId('perangkat_id')
                  ->constrained('perangkats')
                  ->cascadeOnDelete();

            $table->text('keluhan');
            $table->decimal('biaya', 12, 2)->default(0);
            $table->enum('status', [
                'menunggu',
                'diproses',
                'selesai',
                'diambil',
            ])->default('menunggu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_servis', function (Blueprint $table) {
            //
        });
    }
};
