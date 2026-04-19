@extends('layouts.admin')

@section('page-title', 'Dashboard')
@section('page-subtitle', 'Selamat datang kembali, Admin!')

@section('content')
    <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Total Pendapatan</p>
                <h3 class="text-2xl font-black">Rp 12.450.000</h3>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                        </path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Tiket Terjual</p>
                <h3 class="text-2xl font-black">1.284</h3>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Event Aktif</p>
                <h3 class="text-2xl font-black">8 Event</h3>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase mb-1">Pesanan Pending</p>
                <h3 class="text-2xl font-black">12 Pesanan</h3>
            </div>
        </div>

        <!-- Latest Sales Table -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-8 border-b flex justify-between items-center">
                <h3 class="font-black text-xl">Transaksi Terakhir</h3>
                <a href="{{ route('admin.transactions') }}" class="text-indigo-600 font-bold hover:underline">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-4">Pembeli</th>
                            <th class="px-8 py-4">Event</th>
                            <th class="px-8 py-4">Status</th>
                            <th class="px-8 py-4">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Donni Prabowo</p>
                                <p class="text-xs text-slate-400">donni@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">Jazz Night 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase">Success</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 155.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Maya Sari</p>
                                <p class="text-xs text-slate-400">maya@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">AI & Future Workshop</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-lg text-xs font-bold uppercase">Pending</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 55.000</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-6">
                                <p class="font-bold uppercase tracking-wide text-sm">Budi Santoso</p>
                                <p class="text-xs text-slate-400">budi@example.com</p>
                            </td>
                            <td class="px-8 py-6 font-medium text-slate-600">Hackathon 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase">Free</span>
                            </td>
                            <td class="px-8 py-6 font-black text-indigo-600">Rp 0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
