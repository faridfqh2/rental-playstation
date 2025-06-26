<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
   use HasFactory;

    protected $table = 'rentals';

    protected $fillable = [
        'jumlah_unit',
        'tanggal_mulai',
        'tanggal_selesai',
        'alamat',
        'total_harga',
        'midtrans_order_id',
        'nama',
        'email',
    ];
   public function user()
    {
        return $this->belongsTo(User::class);
    }

}
