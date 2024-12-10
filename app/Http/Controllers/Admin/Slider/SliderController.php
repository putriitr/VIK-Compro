<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Meta;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


class SliderController extends Controller
{
    // Display all sliders
    public function index()
    {
        $sliders = Slider::all();
        return view('Admin.Slider.index', compact('sliders'));
    }

    // Show form to create a new slider
    public function create()
    {
        $activities = Activity::all(); // Retrieve all activities
        $routes = [
            // Define your predefined routes here
            'home' => route('home'),
            'about' => route('about'),
            // Add other predefined routes as needed
        ];

        $metas = Meta::where('start_date', '<=', today())
            ->where('end_date', '>=', today())
            ->get();

        return view('Admin.Slider.create', compact('activities', 'routes', 'metas'));
    }

    // Store new slider
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'required|string|max:255',
            'button_url' => 'required|string',
        ]);

        // Upload gambar ke public/assets/img/slider
        $image = $request->file('image_url');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/img/slider'), $imageName);
        $imagePath = 'assets/img/slider/' . $imageName;

        // Tentukan URL tombol secara dinamis
        if ($request->filled('activity_id')) {
            $activity = Activity::find($request->activity_id);
            $buttonUrl = route('activity.show', $activity->id);
        } elseif ($request->filled('meta_slug')) {
            $meta = Meta::where('slug', $request->meta_slug)->firstOrFail();
            $buttonUrl = route('member.meta.show', $meta->slug);
        } else {
            $buttonUrl = $request->button_url;
        }

        Slider::create([
            'image_url' => $imagePath,  // Simpan path gambar
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_url' => $buttonUrl,
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
    }

    // Show form to edit an existing slider
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        $activities = Activity::all(); // Fetch activities for editing
        $routes = [
            'about' => route('about'),
            'product' => route('product.index'),
            'portal' => route('portal'),
        ];

        $metas = Meta::where('start_date', '<=', today())
            ->where('end_date', '>=', today())
            ->get();

        return view('Admin.Slider.edit', compact('slider', 'routes', 'activities', 'metas'));
    }

    // Update slider
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'image_url' => 'nullable|image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'required|string|max:255',
            'button_url' => 'required|string',
        ]);

        // Jika ada gambar baru yang diunggah
        if ($request->hasFile('image_url')) {
            // Hapus gambar lama jika ada
            if (File::exists(public_path($slider->image_url))) {
                File::delete(public_path($slider->image_url));
            }

            // Upload gambar baru ke public/assets/img/slider
            $image = $request->file('image_url');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/slider'), $imageName);
            $slider->image_url = 'assets/img/slider/' . $imageName;
        }

        // Tentukan URL tombol secara dinamis
        if ($request->filled('activity_id')) {
            $activity = Activity::find($request->activity_id);
            $slider->button_url = route('activity.show', $activity->id);
        } elseif ($request->filled('meta_slug')) {
            $meta = Meta::where('slug', $request->meta_slug)->firstOrFail();
            $slider->button_url = route('member.meta.show', $meta->slug);
        } else {
            $slider->button_url = $request->button_url;
        }

        // Perbarui data lainnya
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->button_text = $request->button_text;
        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully.');
    }

    // Delete slider
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        // Delete the image file
        if (File::exists(public_path($slider->image_url))) {
            File::delete(public_path($slider->image_url));
        }

        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully.');
    }
}
