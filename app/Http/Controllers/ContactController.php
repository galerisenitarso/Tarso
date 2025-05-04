<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('kontak'); // File view bernama kontak.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Contact::create([
            'nama' => $request->nama,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}