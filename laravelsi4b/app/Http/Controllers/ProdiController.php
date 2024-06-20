<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index')
                ->with('prodi', $prodi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create', Prodi::class)){
            abort(403);
        }


        $val = $request->validate([
            'nama' => "required|unique:prodis",
            'singkatan' => "required|max:4",
            'fakultas_id' => "required"
        ]);

        // Simpan ke tabel prodis
        Prodi::create($val);

        // redirect ke halmaan list program studi
        return redirect()->route('prodi.index')->with('success', $val['nama']. ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
            $prodi = Prodi::all();
                return view('prodi.edit')
                ->with('prodi', $prodi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        if(auth()->user()->cannot('update', $mahasiswa)){
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        if(auth()->user()->cannot('delete', $mahasiswa)){
            abort(403);
        }
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
