<?php

namespace App\Http\Controllers;

use App\Models\Platinum;
use Illuminate\Http\Request;

class PlatinumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("platinum.index", [
            "title" => "Platinum",
            "platinum" => Platinum::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("platinum.create", [
            "title" => "Platinum"
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
        Platinum::create($request->all());
        return redirect("/platinum");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("platinum.edit", [
            "platinum" => Platinum::where("id", $id)->first(),
            "title" => "Platinum"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Platinum::where("id", $id)->update([
            "nama" => $request->nama,
            "diskon" => $request->diskon,
            "harga_lama" => $request->harga_lama,
            "harga_baru" => $request->harga_baru,
            "deskripsi_singkat" => $request->deskripsi_singkat,
            "instansi" => $request->instansi,
            "background" => $request->background,
            "masa" => $request->masa
        ]);
        return redirect("/platinum");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
