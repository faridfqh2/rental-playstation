<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // Unpaid Order
        Order::create([
            'name' => 'Unpaid User',
            'phone' => '081234567890',
            'qty' => 2,
            'total_price' => 50000,
            'address' => 'Jl. Belum Bayar No. 1',
            'status' => 'unpaid',
            'midtrans_order_id' => Str::uuid(),
            'tanggal_booking' => now()->addDays(1)->toDateString(),
            'jam_booking' => '14:00',
        ]);

        // Paid Order
        Order::create([
            'name' => 'Paid User',
            'phone' => '089876543210',
            'qty' => 3,
            'total_price' => 75000,
            'address' => 'Jl. Sudah Bayar No. 2',
            'status' => 'paid',
            'midtrans_order_id' => Str::uuid(),
            'tanggal_booking' => now()->addDays(2)->toDateString(),
            'jam_booking' => '16:00',
        ]);

        // Tambah data dummy lainnya jika perlu
        for ($i = 1; $i <= 3; $i++) {
            Order::create([
                'name' => "User $i",
                'phone' => '08100000000' . $i,
                'qty' => rand(1, 5),
                'total_price' => rand(30000, 150000),
                'address' => "Jl. Random $i",
                'status' => $i % 2 == 0 ? 'paid' : 'unpaid',
                'midtrans_order_id' => Str::uuid(),
                'tanggal_booking' => now()->addDays(rand(1, 7))->toDateString(),
                'jam_booking' => rand(12, 20) . ':00',
            ]);
        }
    }
}
