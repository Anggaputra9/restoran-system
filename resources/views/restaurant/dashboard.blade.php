@extends('layouts.app')
@section('content')
<div class="p-6 space-y-6">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard Restoran</h1>
        <div class="text-sm text-gray-500">Overview performa bisnis Anda</div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="text-gray-500 text-sm font-semibold">Total Pesanan</div>
            <div class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{ $totalOrders }}</div>
        </div>
        <div class="bg-amber-50 p-6 rounded-xl shadow-sm border border-amber-200 dark:bg-amber-900/20 dark:border-amber-800">
            <div class="text-amber-600 text-sm font-semibold">Pesanan Aktif (Baru/Proses)</div>
            <div class="text-3xl font-bold text-amber-700 dark:text-amber-400 mt-2">{{ $pendingOrders }}</div>
        </div>
        <div class="bg-green-50 p-6 rounded-xl shadow-sm border border-green-200 dark:bg-green-900/20 dark:border-green-800">
            <div class="text-green-600 text-sm font-semibold">Pendapatan (Selesai)</div>
            <div class="text-3xl font-bold text-green-700 dark:text-green-400 mt-2">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="text-gray-500 text-sm font-semibold">Total Menu Aktif</div>
            <div class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{ $totalMenus }}</div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 font-bold text-gray-900 dark:text-white">Pesanan Terbaru</div>
        <table class="w-full text-left text-sm text-gray-600 dark:text-gray-400">
            <thead class="bg-gray-50 dark:bg-gray-700/50">
                <tr>
                    <th class="px-6 py-3 font-semibold">Kode Order</th>
                    <th class="px-6 py-3 font-semibold">Pelanggan</th>
                    <th class="px-6 py-3 font-semibold">Cabang (Microsite)</th>
                    <th class="px-6 py-3 font-semibold">Total</th>
                    <th class="px-6 py-3 font-semibold text-center">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @forelse($recentOrders as $order)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30">
                    <td class="px-6 py-4 font-bold text-indigo-600 dark:text-indigo-400">{{ $order->order_code }}</td>
                    <td class="px-6 py-4">{{ $order->customer_name }} <br><span class="text-xs text-gray-400">Meja: {{ $order->table_number ?? '-' }}</span></td>
                    <td class="px-6 py-4">{{ $order->microsite->name ?? '-' }}</td>
                    <td class="px-6 py-4 font-medium">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 text-center">
                        <span class="px-3 py-1 rounded-full text-xs font-bold uppercase
                            {{ $order->status == 'baru' ? 'bg-blue-100 text-blue-700' : '' }}
                            {{ $order->status == 'diproses' ? 'bg-amber-100 text-amber-700' : '' }}
                            {{ $order->status == 'selesai' ? 'bg-green-100 text-green-700' : '' }}
                            {{ $order->status == 'dibatalkan' ? 'bg-red-100 text-red-700' : '' }}
                        ">{{ $order->status }}</span>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="px-6 py-8 text-center">Belum ada pesanan</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection