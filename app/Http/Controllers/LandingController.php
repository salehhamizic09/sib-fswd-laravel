<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        // mengambil data category
        $categories = Category::all();

        // mengambil data slider yang sudah di approve
        $sliders = Slider::where('approve', '1')->get();

        // Mengambil nomor telepon dari tabel users berdasarkan user yang sedang login
        $phoneNumber = null;
        if (auth()->check()) {
            $user = Auth::user();
            $phoneNumber = $user->phone;
        }

        if ($request->category) {
            $products = Product::where('approve', 1)->with('category')->whereHas('category', function ($query) use ($request) {
                $query->where('name', $request->category);
            })->get();
        } else if ($request->min && $request->max) {
            $products = Product::where('approve', 1)
                ->where('price', '>=', $request->min)
                ->where('price', '<=', $request->max)
                ->get();        
        } else {
            // mengambil 8 data produk secara acak
            $products = Product::where('approve', 1)->get();
        }

        return view('landing2', compact('products', 'categories', 'sliders', 'phoneNumber'));
    }
}