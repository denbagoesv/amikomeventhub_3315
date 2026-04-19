@extends('layouts.admin')

@section('page-title', 'Kelola Event')
@section('page-subtitle', 'Buat dan atur acara seru Anda di sini.')

@section('content')
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
            <div class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
                <input type="text" placeholder="Cari nama event..."
                    class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition">
                <select class="px-5 py-3 rounded-xl border-slate-200 border bg-white outline-none">
                    <option>Semua Kategori</option>
                    <option>Musik</option>
                    <option>Workshop</option>
                </select>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-4 w-16">No</th>
                            <th class="px-8 py-4">Poster</th>
                            <th class="px-8 py-4">Event</th>
                            <th class="px-8 py-4">Harga / Stok</th>
                            <th class="px-8 py-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">1</td>
                            <td class="px-8 py-6">
                                <img src="/assets/concert.png" class="w-16 h-20 rounded-xl object-cover shadow-sm">
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">Jazz Night 2024</p>
                                <p class="text-xs text-slate-400">Musik • 16 Nov 2024</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold text-indigo-600">Rp 150.000</p>
                                <p class="text-xs text-slate-400">Stok: 42/100</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <button
                                        class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">2</td>
                            <td class="px-8 py-6">
                                <img src="/assets/workshop.png" class="w-16 h-20 rounded-xl object-cover shadow-sm">
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">AI & Future Workshop</p>
                                <p class="text-xs text-slate-400">Tech • 26 Oct 2024</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold text-indigo-600">Rp 50.000</p>
                                <p class="text-xs text-slate-400">Stok: 12/50</p>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <button
                                        class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
