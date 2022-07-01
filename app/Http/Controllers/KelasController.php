<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("kelas.index", [
            "title" => "Kelas",
            "kelas" => Kelas::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("kelas.create", [
            "title" => "Kelas"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelas::create([
            "nama" => $request->nama,
            "diskon" => $request->diskon,
            "harga_lama" => $request->harga_lama,
            "harga_baru" => $request->harga_baru,
            "deskripsi_singkat" => $request->deskripsi_singkat,
            "instansi" => $request->instansi,
            "background" => $request->background,
            "masa" => $request->masa
        ]);
        return redirect("/kelas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("kelas.edit", [
            "kelas" => Kelas::where("id", $id)->first(),
            "title" => "Kelas"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kelas::where("id", $id)->update([
            "nama" => $request->nama,
            "diskon" => $request->diskon,
            "harga_lama" => $request->harga_lama,
            "harga_baru" => $request->harga_baru,
            "deskripsi_singkat" => $request->deskripsi_singkat,
            "instansi" => $request->instansi,
            "background" => $request->background,
            "masa" => $request->masa
        ]);
        return redirect("/kelas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::destroy($id);
        return redirect("/kelas");
    }
}
