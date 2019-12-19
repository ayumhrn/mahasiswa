<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', ['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $mhs = new Mahasiswa;

        // $mhs->nama = $request->nama;
        // $mhs->nim = $request->nim;
        // $mhs->email = $request->email;
        // $mhs->jurusan = $request->jurusan;
        // $mhs->prodi = $request->prodi;


        // $mhs->save();

        // Mahasiswa::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,
        //     'prodi' => $request->prodi
        // ]);

        $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required |size:10|',
            'email' => 'required|email',
            'jurusan' => 'required',
            'prodi' => 'required'
        ]);

        Mahasiswa::create($request->all());
        /* karna fillable di model Mahasiswa sudah didefinisikan,
        caranya create nya begini saja */

        return redirect('/mahasiswadata')->with('status', 'Data berhasil disimpan!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {   
        
        $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required |size:10|',
            'email' => 'required|email',
            'jurusan' => 'required',
            'prodi' => 'required'
        ]);

        Mahasiswa::where('id', $mahasiswa->id)
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan,
                    'prodi' => $request->prodi,
                ]);

        return redirect('/mahasiswadata')->with('status', 'Data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);

        return redirect('/mahasiswadata')->with('status', 'Data berhasil dihapus!');


    }
}
