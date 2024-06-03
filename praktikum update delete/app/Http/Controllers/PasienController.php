<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::get();
        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cek validasi
        $request->validate(
            [
                'kode' => 'required|string',
                'nama' => 'required|string',
                'tmp_lahir' => 'required|string',
                'tgl_lahir' => 'required|date',
                'gender' => 'required|string',
                'email' => 'required|string',
                'alamat' => 'required|string',
            ]);//lkirim data
            Pasien::create([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'gender' => $request->gender,
                'email' => $request->email,
                'alamat' => $request->alamat,
            ]);
            //redirect ke  halaman dashboard
            return redirect()->route('pasiens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pasien $pasien)
    {
         // Update the Pasien instance
        $pasien->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('pasiens.index')->with('success', 'Pasien updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        //hapus data
        $pasien->delete();
        //redirect ke index
         return redirect()->route('pasiens.index');
    }
}
