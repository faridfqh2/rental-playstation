<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    public function up()
    {
   Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_unit');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->text('alamat');
            $table->string('metode_pembayaran');
            $table->bigInteger('total_harga');
            $table->string('midtrans_order_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
