<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        $offers = Product::where('status', Product::PUBLICADO)->where('category_id', 1)->latest('id')->get();
        $beds = Product::where('status', Product::PUBLICADO)->where('category_id', 2)->latest('id')->take(3)->get();
        $furniture = Product::where('status', Product::PUBLICADO)->where('category_id', 3)->latest('id')->take(3)->get();
        return view('welcome', compact('promotions', 'offers', 'beds', 'furniture'));
    }
}
