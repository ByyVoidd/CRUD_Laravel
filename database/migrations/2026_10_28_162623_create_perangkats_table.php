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
        Schema::table('perangkats', function (Blueprint $table) {
            $table->foreignId('pelanggan_id')
                  ->constrained('pelanggans') 
                  ->cascadeOnDelete();  

            $table->string('jenis_perangkat');
            $table->string('merek');
            $table->string('model')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkats');
    }
};
