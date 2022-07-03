<?php

namespace App\Http\Controllers;

use App\Models\Platinum;
use App\Models\Fasilitas;
use App\Models\Pembelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
            "title" => "Platinum",
            "fasilitas" => Fasilitas::get(),
            "pembelajaran" => Pembelajaran::get()
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
        Platinum::create([
            "nama" => $request->nama,
            "diskon" => $request->diskon,
            "pelajar" => $request->pelajar,
            "slogan" => $request->slogan,
            "harga_lama" => $request->harga_lama,
            "harga_baru" => $request->harga_baru,
            "deskripsi_singkat" => $request->deskripsi_singkat,
            "instansi" => $request->instansi,
            "background" => $request->background,
            "masa" => $request->masa
        ]);
        $platinum = Platinum::latest()->first()->id;
        if($request->fasilitas) {
            foreach($request->fasilitas as $item) {
                DB::table("fasilitas_platinum")->insert([
                    "fasilitas_id" => $item,
                    "platinum_id" => $platinum
                ]);
            }
        }
        if($request->pembelajaran){
            foreach($request->pembelajaran as $item) {
                DB::table("pembelajaran_platinum")->insert([
                    "pembelajaran_id" => $item,
                    "platinum_id" => $platinum
                ]);
            }
        }
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
            "platinum" => Platinum::find($id),
            "title" => "Platinum",
            "fasilitas" => Fasilitas::get(),
            "pembelajaran" => Pembelajaran::get()
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
        DB::table("fasilitas_platinum")->where("platinum_id", $id)->delete();
        DB::table("pembelajaran_platinum")->where("platinum_id", $id)->delete();
        Platinum::find($id)->update([
            "nama" => $request->nama,
            "diskon" => $request->diskon,
            "pelajar" => $request->pelajar,
            "slogan" => $request->slogan,
            "harga_lama" => $request->harga_lama,
            "harga_baru" => $request->harga_baru,
            "deskripsi_singkat" => $request->deskripsi_singkat,
            "instansi" => $request->instansi,
            "background" => $request->background,
            "masa" => $request->masa
        ]);
        if($request->fasilitas) {
            foreach($request->fasilitas as $item) {
                DB::table("fasilitas_platinum")->insert([
                    "fasilitas_id" => $item,
                    "platinum_id" => $id
                ]);
            }
        }
        if($request->pembelajaran){
            foreach($request->pembelajaran as $item) {
                DB::table("pembelajaran_platinum")->insert([
                    "pembelajaran_id" => $item,
                    "platinum_id" => $id
                ]);
            }
        }
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
        Platinum::destroy($id);
        DB::table("fasilitas_platinum")->where("platinum_id", $id)->delete();
        DB::table("pembelajaran_platinum")->where("platinum_id", $id)->delete();
        return redirect("/platinum");
    }
}
