<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pertanyaan.index", [
            "title" => "Pertanyaan",
            "pertanyaan" => Pertanyaan::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pertanyaan.create", [
            "title" => "Pertanyaan"
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
        Pertanyaan::create([
            "pertanyaan" => $request->pertanyaan,
            "jawaban" => $request->jawaban
        ]);

        return redirect("/pertanyaan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("pertanyaan.edit", [
            "title" => "Pertanyaan",
            "pertanyaan" => Pertanyaan::where("id", $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pertanyaan::where("id", $id)->update([
            "pertanyaan" => $request->pertanyaan,
            "jawaban" => $request->jawaban
        ]);

        return redirect("/pertanyaan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pertanyaan::destroy($id);
        return redirect("/pertanyaan");
    }
}
