<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use Illuminate\Http\Request;
use App\Models\daftarsekolah;
use App\Http\Controllers\Controller;

class TelmaController extends Controller
{
    public function index()
    {
        $daftarList = daftar::all(); // Mengambil semua data dari model Daftar
        return view('welcome', ['daftarList' => $daftarList]); // Menampilkan data ke view
    }


    public function getKampusByKeyword(Request $request)
    {
        $keyword = $request->input('keyword');
        $limit = 10; // Tetapkan batas data yang diambil

        $kampusList = daftarsekolah::where('NAMA_SEKOLAH', 'LIKE', "%$keyword%")
            ->orWhere('NPSN', 'LIKE', "%$keyword%")
            ->take($limit) // Tetapkan batas data yang diambil
            ->get();

        return response()->json(['kampusList' => $kampusList]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kampus_id' => 'required|exists:data_sekolah_sumatera,NPSN',
            'semester' => 'required|integer|min:1',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:daftars,email',
            'nomor_hp' => 'required|string|max:15',
            'nomor_wa' => 'nullable|string|max:15',
            'hobi' => 'nullable|string|max:255',
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
        ]);

        daftar::create($request->all());

        return redirect('/')->with('success', 'Data berhasil disimpan.');
    }
}
