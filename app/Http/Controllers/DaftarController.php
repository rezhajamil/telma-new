<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\daftarsekolah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DaftarController extends Controller
{
    public function index()
    {
        $daftarList = Daftar::all(); // Mengambil semua data dari model Daftar
        return view('welcome', ['daftarList' => $daftarList]); // Menampilkan data ke view
    }

    public function create()
    {
        // Mengambil daftar kampus dari model Kampus
        $kampusList = daftarsekolah::all();

        // Meneruskan daftar kampus ke tampilan create.blade.php
        return view('welcome', ['kampusList' => $kampusList]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kampus_id' => 'required|exists:kampus,npsn',
            'semester' => 'required|integer|min:1',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:daftar,email',
            'nomor_hp' => 'required|string|max:15',
            'nomor_wa' => 'nullable|string|max:15',
            'hobi' => 'nullable|string|max:255',
            'tempat_nongkrong_favorit' => 'nullable|string|max:255',
        ], [
            'kampus_id.required' => 'Kampus ID wajib diisi.',
            'kampus_id.exists' => 'Kampus ID tidak valid.',
            'semester.required' => 'Semester wajib diisi.',
            'semester.integer' => 'Semester harus berupa bilangan bulat.',
            'semester.min' => 'Semester harus lebih besar dari 0.',
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'nama_lengkap.max' => 'Nama lengkap tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'nomor_hp.required' => 'Nomor HP wajib diisi.',
            'nomor_hp.max' => 'Nomor HP tidak boleh lebih dari 15 karakter.',
            'nomor_wa.max' => 'Nomor WA tidak boleh lebih dari 15 karakter.',
            'hobi.max' => 'Hobi tidak boleh lebih dari 255 karakter.',
            'tempat_nongkrong_favorit.max' => 'Tempat nongkrong favorit tidak boleh lebih dari 255 karakter.',
        ]);

        Daftar::create($request->all());

        return redirect('/')->with('success', 'Data berhasil disimpan.');
    }

}

