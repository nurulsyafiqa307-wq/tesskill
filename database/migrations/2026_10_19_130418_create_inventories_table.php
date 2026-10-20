<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('inventaris_id');
            $table->string('barang');
            $table->string('type');
            $table->string('serial_number');
            $table->string('spesifikasi');
            $table->string('status'); 
            $table->foreignId('member_id')->nullable()->constrained('members')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};