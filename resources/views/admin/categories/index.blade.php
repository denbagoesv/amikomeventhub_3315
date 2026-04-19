@extends('layouts.admin')

@section('page-title', 'Manajemen Kategori')
@section('page-subtitle', 'Kelola kategori event yang tersedia di platform')

@section('content')

    {{-- Action Bar --}}
    <div class="flex justify-between items-center mb-6">
        <p class="text-slate-500 text-sm">Menampilkan <span class="font-bold text-slate-700">3</span> kategori</p>
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2.5 rounded-xl transition text-sm">
            + Tambah Kategori
        </button>
    </div>

    {{-- Categories Table --}}
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-500 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-6 py-3 text-left">No</th>
                    <th class="px-6 py-3 text-left">Nama Kategori</th>
                    <th class="px-6 py-3 text-left">Jumlah Event</th>
                    <th class="px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-400">1</td>
                    <td class="px-6 py-4">
                        <span class="bg-indigo-100 text-indigo-700 text-xs font-bold px-3 py-1 rounded-full">Seminar</span>
                    </td>
                    <td class="px-6 py-4 text-slate-500">4 event</td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="text-xs bg-amber-100 text-amber-700 font-bold px-3 py-1 rounded-lg hover:bg-amber-200 transition">Edit</button>
                        <button class="text-xs bg-red-100 text-red-600 font-bold px-3 py-1 rounded-lg hover:bg-red-200 transition">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-400">2</td>
                    <td class="px-6 py-4">
                        <span class="bg-pink-100 text-pink-700 text-xs font-bold px-3 py-1 rounded-full">Konser</span>
                    </td>
                    <td class="px-6 py-4 text-slate-500">2 event</td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="text-xs bg-amber-100 text-amber-700 font-bold px-3 py-1 rounded-lg hover:bg-amber-200 transition">Edit</button>
                        <button class="text-xs bg-red-100 text-red-600 font-bold px-3 py-1 rounded-lg hover:bg-red-200 transition">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 text-slate-400">3</td>
                    <td class="px-6 py-4">
                        <span class="bg-emerald-100 text-emerald-700 text-xs font-bold px-3 py-1 rounded-full">Workshop</span>
                    </td>
                    <td class="px-6 py-4 text-slate-500">6 event</td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="text-xs bg-amber-100 text-amber-700 font-bold px-3 py-1 rounded-lg hover:bg-amber-200 transition">Edit</button>
                        <button class="text-xs bg-red-100 text-red-600 font-bold px-3 py-1 rounded-lg hover:bg-red-200 transition">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
