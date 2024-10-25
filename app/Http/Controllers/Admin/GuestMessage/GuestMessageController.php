<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use App\Models\GuestMessage;
use Illuminate\Http\Request;

class GuestMessageController extends Controller
{
    // Menampilkan form untuk pengiriman pesan
    public function create()
    {
        return view('guest.create');
    }

    // Menyimpan pesan dari pengguna
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        GuestMessage::create($request->all());

        return redirect()->route('guest.create')->with('success', 'Your message has been sent successfully!');
    }

    // Menampilkan semua pesan di admin
    public function index()
    {
        $messages = GuestMessage::all();
        return view('admin.guest_messages.index', compact('messages'));
    }
}
