<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    
    protected $table = "orders";
        protected $fillable = [
            'user_name',
            'tanggal',
            'order_id',
            'jam',
        ];

        public function order()
        {
            return $this->belongsTo(Order::class);
        }

}
