@extends('layouts.app')
@section('content')
 <main class="max-w-3xl mx-auto px-6 py-20">
        <div class="mb-12">
            <a href="{{ route('events.show') }}" class="text-indigo-600 font-bold flex items-center gap-2 mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Event
            </a>
            <h1 class="text-4xl font-extrabold">Checkout</h1>
            <p class="text-slate-500 mt-2">Lengkapi data Anda untuk mendapatkan tiket.</p>
        </div>

        <div class="grid grid-cols-1 gap-8">
            <!-- Summary Card -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-bold mb-6 border-b pb-4">Pesanan Anda</h3>
                <div class="flex gap-6 items-start">
                    <img src="/assets/concert.png" alt="Event" class="w-24 h-24 rounded-2xl object-cover">
                    <div>
                        <h4 class="font-extrabold text-lg">Jazz Night 2024: A Celebration</h4>
                        <p class="text-slate-500">16 Nov 2024 • The Blue Note Lounge</p>
                        <p class="text-indigo-600 font-bold mt-2">1 x Rp 150.000</p>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t space-y-3">
                    <div class="flex justify-between text-slate-500">
                        <span>Harga Tiket</span>
                        <span>Rp 150.000</span>
                    </div>
                    <div class="flex justify-between text-slate-500">
                        <span>Biaya Layanan</span>
                        <span>Rp 5.000</span>
                    </div>
                    <div class="flex justify-between text-2xl font-black mt-4 pt-4 border-t">
                        <span>Total Bayar</span>
                        <span class="text-indigo-600">Rp 155.000</span>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-bold mb-6 italic text-indigo-600 underline underline-offset-8">📦 Data Pemesan
                    (Tanpa Login)</h3>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama
                            Lengkap</label>
                        <input type="text" placeholder="Masukkan nama sesuai identitas"
                            class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                            required>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Email
                                Aktif</label>
                            <input type="email" placeholder="contoh@gmail.com"
                                class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                                required>
                            <p class="text-[10px] text-slate-400 mt-2 font-bold uppercase tracking-tighter">*E-Ticket
                                akan dikirim ke email ini</p>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">No.
                                WhatsApp</label>
                            <input type="tel" placeholder="08xxxxxxx"
                                class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium"
                                required>
                        </div>
                    </div>

                    <button type="button" onclick="showMidtrans()"
                        class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-xl shadow-xl shadow-indigo-200 hover:bg-indigo-700 active:scale-95 transition-all">
                        Bayar Sekarang
                    </button>
                    <p class="text-center text-xs text-slate-400">Dengan menekan tombol di atas, Anda menyetujui Syarat
                        & Ketentuan kami.</p>
                </form>
            </div>

        </div>
    </main>

@endsection

@section('scripts')
    <!-- Overlay Midtrans Simulation -->
    <div id="midtrans-overlay"
        class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-6">
        <div class="bg-white w-full max-w-sm rounded-[2rem] overflow-hidden shadow-2xl animate-bounce-in">
            <div class="bg-slate-50 p-6 flex justify-between items-center border-b">
                <img src="https://midtrans.com/assets/img/logo-dark.png" alt="Midtrans Logo" class="h-6">
                <button onclick="hideMidtrans()" class="p-2 hover:bg-slate-200 rounded-full">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l18 18">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="p-8 text-center">
                <p class="text-slate-500 font-medium">Total Tagihan</p>
                <h2 class="text-3xl font-black text-indigo-700 my-2">Rp 155.000</h2>
                <p class="text-xs text-slate-400">Order ID #TRX-99210</p>

                <div class="mt-8 space-y-4">
                    <button onclick="window.location.href='{{ route('ticket') }}'"
                        class="w-full py-4 border-2 border-indigo-100 rounded-2xl flex justify-between items-center px-6 hover:border-indigo-600 transition group">
                        <span class="font-bold group-hover:text-indigo-600">GoPay / QRIS</span>
                        <span class="text-indigo-400">→</span>
                    </button>
                    <button
                        class="w-full py-4 border-2 border-indigo-100 rounded-2xl flex justify-between items-center px-6 hover:border-indigo-600 transition group opacity-50 cursor-not-allowed">
                        <span class="font-bold">Virtual Account (BNI, BRI)</span>
                        <span class="text-indigo-400">→</span>
                    </button>
                    <button
                        class="w-full py-4 border-2 border-indigo-100 rounded-2xl flex justify-between items-center px-6 hover:border-indigo-600 transition group opacity-50 cursor-not-allowed">
                        <span class="font-bold">Kartu Debit/Kredit</span>
                        <span class="text-indigo-400">→</span>
                    </button>
                </div>

                <div
                    class="mt-12 flex items-center justify-center gap-2 text-xs text-slate-400 font-bold uppercase tracking-widest">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Secure Checkout by Midtrans
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes bounce-in {
            0% { transform: scale(0.9); opacity: 0; }
            70% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); }
        }
        .animate-bounce-in { animation: bounce-in 0.4s ease-out forwards; }
    </style>

    <script>
        function showMidtrans() {
            document.getElementById('midtrans-overlay').classList.remove('hidden');
            document.getElementById('midtrans-overlay').classList.add('flex');
        }
        function hideMidtrans() {
            document.getElementById('midtrans-overlay').classList.add('hidden');
            document.getElementById('midtrans-overlay').classList.remove('flex');
        }
    </script>
@endsection