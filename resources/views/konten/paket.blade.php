@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        {{-- Header Section --}}
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Sewa PlayStation 5 Premium</h1>
            <p class="text-base">
                Nikmati pengalaman gaming next-gen dengan paket sewa PS5 kami. Lengkap dengan game terbaru, controller
                DualSense, dan layanan profesional.
            </p>
        </div>

        {{-- Detail Paket --}}
        <div class="max-w-3xl mx-auto mb-8">
            <h2 class="text-xl font-semibold mb-4">Paket Rental Playstation</h2>
            <ul class="list-disc pl-5 space-y-2">
                <li>Harian: Rp30.000 (Minimal sewa 3 hari)</li>
                <li>Mingguan: Rp200.000 (Hemat Rp30.000)</li>
            </ul>
        </div>

        {{-- Fasilitas --}}
        <div class="max-w-3xl mx-auto mb-8">
            <h2 class="text-xl font-semibold mb-4">Fasilitas</h2>
            <ul class="list-disc pl-5 space-y-2">
                <li>1x DualSense Controller original (tambahan Rp20.000/hari)</li>
                <li>20+ game premium (GTA V, FIFA 23, God of War Ragnarök, dll)</li>
                <li>Layanan antar-jemput gratis (radius 5km)</li>
            </ul>
        </div>

        {{-- Info Tambahan --}}
        <div class="max-w-3xl mx-auto mb-8">
            <h2 class="text-xl font-semibold mb-4">Informasi Tambahan</h2>
            <ul class="list-disc pl-5 space-y-2">
                <li>Jam Operasional: 08.00 - 21.00</li>
                <li>WhatsApp: 0812-3456-7890</li>
                <li>Instagram: @ps_rentalkharisma</li>
            </ul>
        </div>

        {{-- Catatan --}}
        <div class="max-w-3xl mx-auto mb-8">
            <p><strong>Perhatian:</strong>KTP diperlukan</p>
        </div>

    </div>
@endsection