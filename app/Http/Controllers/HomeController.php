<?php

namespace App\Http\Controllers;

use App\Models\Slider; // Import model Slider
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua slider dari database
        $sliders = Slider::all(); // Atau Anda bisa menggunakan paginasi jika diperlukan

        return view('home', compact('sliders')); // Kirim data slider ke tampilan
    }
}
