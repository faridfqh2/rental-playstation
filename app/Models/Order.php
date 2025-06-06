<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    // Kolom yang boleh diisi massal (mass assignable)
  protected $fillable = [
    'name',
    'phone',
    'qty',
    'total_price',
    'address',
    'status',
    'midtrans_order_id', // tambahkan ini
    'tanggal_booking',
    'jam_booking',
];

}
