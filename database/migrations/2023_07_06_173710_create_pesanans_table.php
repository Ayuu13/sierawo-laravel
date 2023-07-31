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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('no_pesanan', 10)->unique();
            $table->unsignedBigInteger('pelanggan_id');
            $table->foreign('pelanggan_id')->references('id')->on('users')->onDelete('restrict');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('restrict');
            $table->string('alamat_acara',150);
            $table->string('detail_acara',100)->nullable();
            $table->dateTime('tanggal_acara');
            $table->dateTime('waktu_pemesanan');
            $table->unsignedBigInteger('status_id')->default(1);
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('restrict');
            $table->string('jenis_pembayaran',30)->nullable();
            $table->float('harga_total', 20, 2)->nullable();
            $table->dateTime('waktu_pembayaran')->nullable();
            $table->timestamps();
        });
        
        DB::unprepared('
            CREATE TRIGGER generate_no_pesanan BEFORE INSERT ON pesanans
            FOR EACH ROW
            BEGIN
                SET NEW.no_pesanan = LPAD(FLOOR(RAND() * 9999999999) + 1, 10, "0");
            END
        ');
        
        DB::unprepared('
            CREATE TRIGGER set_waktu_pemesanan BEFORE INSERT ON pesanans
            FOR EACH ROW
            BEGIN
                SET NEW.waktu_pemesanan = NOW();
            END
        ');
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
