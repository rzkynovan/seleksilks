<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSiswa = Siswa::all();
        return view('dashboard', compact('dataSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'email_siswa' => $request->email_siswa,
            'alamat_siswa' => $request->alamat_siswa,
            'notlp_siswa' => $request->notlp_siswa,
            'kelas_siswa' => $request->kelas_siswa
        ]);
        return redirect('dashboard')->with('success', 'Data Berhasil Disimpan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas = Siswa::findorfail($id);
        return view('edit', compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswas = Siswa::findorfail($id);
        $siswas->update($request->all());
        return redirect('dashboard')->with('success', 'Data Berhasil Diupdate!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswass = Siswa::findorfail($id);
        $siswass->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');;
    }
}
