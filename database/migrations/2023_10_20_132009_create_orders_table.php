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
            $table->increments("id_order");
            $table->string("nomor_invoice",100);
            $table->string("nama_pemesan",100);
            $table->string("no_wa_pemesan",100);
            $table->string("no_meja",100);
            $table->enum("jenis_pembayaran",['tunai','qris']);
            $table->enum("status_pembayaran",['unpaid','paid']);
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