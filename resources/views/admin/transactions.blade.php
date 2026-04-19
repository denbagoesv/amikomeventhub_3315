@extends('layouts.admin')

@section('page-title', 'Laporan Transaksi')
@section('page-subtitle', 'Pantau arus kas dan penjualan tiket Anda.')

@section('content')
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
            <div class="px-8 py-6 bg-slate-50/50 border-b flex flex-wrap gap-4 items-center">
                <div class="flex-1 min-w-[300px] flex gap-2">
                    <input type="text" placeholder="Cari Order ID, Nama, atau Email..."
                        class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition uppercase text-sm font-medium tracking-wide">
                </div>
                <div class="flex gap-2">
                    <select
                        class="px-5 py-3 rounded-xl border-slate-200 border bg-white outline-none text-sm font-bold">
                        <option>Semua Status</option>
                        <option class="text-green-600">Success</option>
                        <option class="text-orange-600">Pending</option>
                        <option class="text-rose-600">Expired</option>
                    </select>
                    <select
                        class="px-5 py-3 rounded-xl border-slate-200 border bg-white outline-none text-sm font-bold">
                        <option>Bulan Ini</option>
                        <option>Bulan Lalu</option>
                        <option>Tahun 2024</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-4">Order ID</th>
                            <th class="px-8 py-4">Detail Pembeli</th>
                            <th class="px-8 py-4">Event</th>
                            <th class="px-8 py-4">Tgl Transaksi</th>
                            <th class="px-8 py-4">Status</th>
                            <th class="px-8 py-4 text-right">Total Tagihan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6">
                                <span
                                    class="font-mono font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg text-sm">#TRX-99210</span>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold text-slate-800">Donni Prabowo</p>
                                <p class="text-xs text-slate-500">donni@example.com</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-medium text-slate-700">Jazz Night 2024</p>
                            </td>
                            <td class="px-8 py-6 text-sm text-slate-500">
                                26 Mar 2024, 17:45
                            </td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold uppercase ring-1 ring-green-200">Success</span>
                            </td>
                            <td class="px-8 py-6 text-right font-black text-slate-900">
                                Rp 155.000
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition text-slate-400">
                            <td class="px-8 py-6">
                                <span
                                    class="font-mono font-bold bg-slate-100 px-3 py-1 rounded-lg text-sm">#TRX-99209</span>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold">Maya Sari</p>
                                <p class="text-xs">maya@example.com</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-medium">AI & Future Workshop</p>
                            </td>
                            <td class="px-8 py-6 text-sm">
                                26 Mar 2024, 15:20
                            </td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 rounded-lg text-xs font-bold uppercase ring-1 ring-orange-200">Pending</span>
                            </td>
                            <td class="px-8 py-6 text-right font-black">
                                Rp 55.000
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6">
                                <span
                                    class="font-mono font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg text-sm">#TRX-99208</span>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold text-slate-800">Budi Santoso</p>
                                <p class="text-xs text-slate-500">budi@example.com</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-medium text-slate-700">Hackathon 2024</p>
                            </td>
                            <td class="px-8 py-6 text-sm text-slate-500">
                                25 Mar 2024, 10:00
                            </td>
                            <td class="px-8 py-6">
                                <span
                                    class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold uppercase ring-1 ring-slate-200">Free</span>
                            </td>
                            <td class="px-8 py-6 text-right font-black text-slate-900">
                                Rp 0
                            </td>
                        </tr>
                        <!-- More rows... -->
                    </tbody>
                </table>
            </div>

            <div class="px-8 py-6 bg-slate-50/50 border-t flex justify-between items-center">
                <p class="text-sm text-slate-500 font-medium">Menampilkan 3 dari 124 transaksi</p>
                <div class="flex gap-2">
                    <button
                        class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold opacity-50 cursor-not-allowed">Previous</button>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl shadow-md text-sm font-bold">1</button>
                    <button class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold">2</button>
                    <button
                        class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold">Next</button>
                </div>
            </div>
        </div>
@endsection
