@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">📋 Informasi & Panduan Rental PS Kharisma</h1>

        {{-- Catatan Penting --}}
        <div class="max-w-3xl mx-auto bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4">
            <p><strong>⚠️ Catatan Penting:</strong> Harap membawa <strong>KTP</strong> sebagai jaminan saat pengambilan unit
                PS.</p>
        </div>

        {{-- PERATURAN UTAMA --}}
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-red-600 mb-4">🚨 Peraturan Penting</h2>
            <p class="text-gray-700 mb-2">
                Pengguna <strong>wajib melakukan booking jadwal terlebih dahulu</strong> sebelum bermain atau menyewa unit.
                Apabila terdapat <strong>keterlambatan lebih dari 30 menit</strong> tanpa konfirmasi melalui WhatsApp admin,
                maka booking Anda akan <span class="font-semibold text-red-500">dianggap hangus</span> dan slot akan
                diberikan
                kepada pelanggan lain.
            </p>
        </div>

        {{-- ALUR BOOKING --}}
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-blue-700 mb-4">🧭 Alur Booking & Navigasi Website</h2>
            <ol class="list-decimal ml-6 text-gray-700 space-y-2">
                <li><strong>Login / Register</strong> – Pengguna wajib login atau membuat akun sebelum bisa melakukan
                    booking.</li>
                <li>
                    <strong>Menu Home, About, Blog, Game</strong> – Menampilkan informasi dan konten yang selalu diperbarui
                    oleh admin.
                    <ul class="list-disc ml-6">
                        <li>Blog berisi artikel dan update.</li>
                        <li>Game dapat di-upgrade atau ditambahkan oleh admin.</li>
                    </ul>
                </li>
                <li>
                    <strong>Menu Schedule</strong> – Menampilkan jadwal booking semua user.
                    <ul class="list-disc ml-6">
                        <li>Booking Anda hanya muncul jika sudah divalidasi oleh admin sebagai <span
                                class="text-green-600 font-semibold">"Paid"</span>.</li>
                    </ul>
                </li>
                <li><strong>Menu History</strong> – Menampilkan riwayat transaksi dan booking Anda.</li>
                <li>
                    <strong>Pembayaran Booking (Main di Tempat)</strong>
                    <ul class="list-disc ml-6">
                        <li>Proses checkout → bayar via Midtrans → invoice → tampil di History.</li>
                    </ul>
                </li>
                <li>
                    <strong>Pembayaran Booking (Main di Rumah / Rental PS)</strong>
                    <ul class="list-disc ml-6">
                        <li>Proses checkout → invoice → datang ke lokasi ambil unit dengan membawa KTP.</li>
                    </ul>
                </li>
                <li>
                    <strong>Menu Contact</strong> – Terdapat peta lokasi dan form feedback. Pesan dari user akan masuk ke
                    email admin.
                </li>
                <li><strong>Menu Profil</strong> – Pengguna bisa mengubah nama, email, dan foto profil.</li>
                <li><strong>Menu Logout</strong> – Untuk keluar dari akun dengan aman.</li>
            </ol>
        </div>

        {{-- FITUR UNTUK ADMIN --}}
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-green-700 mb-4">🛠️ Fitur Khusus Admin</h2>
            <ul class="list-disc ml-6 text-gray-700 space-y-1">
                <li>Edit dan hapus data order jam dari user.</li>
                <li>Update dan hapus booking rental (main di rumah).</li>
                <li>Tambah konten blog dan update daftar game.</li>
            </ul>
        </div>

        {{-- INFORMASI TAMBAHAN --}}
        <div>
            <h2 class="text-2xl font-semibold text-purple-700 mb-4">ℹ️ Informasi Tambahan</h2>
            <ul class="list-disc ml-6 text-gray-700 space-y-1">
                <li><strong>Menu Informasi Paket Main di Tempat</strong> – Berisi detail harga dan durasi sewa di lokasi
                    rental.</li>
                <li><strong>Menu Informasi Rental PS (Main di Rumah)</strong> – Menjelaskan sistem sewa, durasi, harga, dan
                    ketentuan jaminan (KTP).</li>
            </ul>
        </div>
    </div>
@endsection