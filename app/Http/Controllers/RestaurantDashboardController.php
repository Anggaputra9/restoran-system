<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\MenuItem;
use App\Models\Microsite;

class RestaurantDashboardController extends Controller
{
    public function index()
    {
        $microsite = Microsite::where('slug', 'restoran')->firstOrFail();
        // Ambil data statistik global restoran
        $totalOrders = Order::where('microsite_id', $microsite->id)->count();
        $pendingOrders = Order::where('microsite_id', $microsite->id)->whereIn('status', ['baru', 'diproses'])->count();
        $totalRevenue = Order::where('microsite_id', $microsite->id)->where('status', 'selesai')->sum('total_price');
        $totalMenus = MenuItem::where('microsite_id', $microsite->id)->count();
        $recentOrders = Order::where('microsite_id', $microsite->id)->with('microsite')->latest()->take(5)->get();

        return view('restaurant.dashboard', compact('totalOrders', 'pendingOrders', 'totalRevenue', 'totalMenus', 'recentOrders'));
    }
}