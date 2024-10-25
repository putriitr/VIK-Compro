<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all(); // Ambil semua data slider
        return view('admin.sliders.index', compact('sliders')); // Kirim data ke view
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subjudul' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Jika validasi berhasil, eksekusi kode berikut
        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/img/slider'), $imageName); // Perbarui path gambar

        Slider::create([
            'subjudul' => $request->subjudul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'gambar' => 'assets/img/slider/' . $imageName, // Perbarui path gambar
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'subjudul' => 'required|string|max:255', // Validasi subjudul
            'judul' => 'required|string|max:255', // Validasi judul
            'deskripsi' => 'required', // Validasi deskripsi
        ]);

        $imageName = $slider->gambar; // Ambil nama gambar lama
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/img/slider'), $imageName); // Perbarui path gambar
            $imageName = 'assets/img/slider/' . $imageName; // Perbarui path gambar
        }

        $slider->update([
            'subjudul' => $request->subjudul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'gambar' => $imageName, // Perbarui path gambar
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        if (file_exists(public_path($slider->gambar))) {
            unlink(public_path($slider->gambar)); // Hapus gambar jika ada
        }
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }

    public function show(Slider $slider)
    {
        return view('admin.sliders.show', compact('slider'));
    }
}
