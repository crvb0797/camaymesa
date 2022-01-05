<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('welcome', compact('promotions'));
    }
}
