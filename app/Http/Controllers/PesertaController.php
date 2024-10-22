<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pesertas = Peserta::all();

        // Kirim data ke view
        return view('admin.peserta.index', compact('pesertas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|unique:pesertas|max:20',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'asal_sekolah' => 'required|string|max:255',
        ]);

        // Simpan data baru ke database
        Peserta::create($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.peserta.index')->with('success', 'Peserta berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $pesertum)
    {
        return view('admin.peserta.edit', compact('pesertum'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $pesertum)
    {

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|max:20|unique:pesertas,nik,' . $pesertum->id,
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'asal_sekolah' => 'required|string|max:255',
        ]);

        $pesertum->update($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.peserta.index')->with('success', 'Peserta berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $pesertum)
    {
        // Hapus peserta dari database

        $pesertum->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.peserta.index')->with('success', 'Peserta berhasil dihapus.');
    }

}
