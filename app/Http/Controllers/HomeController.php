<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Promo;
use App\Models\Microsite;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil info pengaturan restoran
        $microsite = Microsite::where('slug', env('MICROSITE_SLUG', 'restoran'))->first();

        // Menu Makanan (hanya yang tersedia)
        $categories = Category::where('microsite_id', $microsite->id)->with(['menuItems' => function ($query) {
            $query->where('is_available', true);
        }])->orderBy('sort_order')->get();

        // Promo Aktif (berdasarkan tanggal mulai dan berakhir)
        $promos = Promo::where('microsite_id', $microsite->id)->whereDate('start_date', '<=', now())
                       ->whereDate('end_date', '>=', now())
                       ->latest()->take(3)->get();

        // Galeri Foto
        $galleries = Gallery::where('microsite_id', $microsite->id)->latest()->take(8)->get();

        return view('pages.home', compact('microsite', 'categories', 'promos', 'galleries'));
    }
}