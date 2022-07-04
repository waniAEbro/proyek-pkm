<?php

namespace App\Http\Controllers;

use App\Models\Pembelajaran;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pembelajaran.index", [
            "title" => "Pembelajaran",
            "pembelajaran" => Pembelajaran::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pembelajaran.create", [
            "title" => "Pembelajaran"
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
        $request->validate([
            "pembelajaran" => "unique:pembelajarans"
        ]);
        Pembelajaran::create([
            "pembelajaran" => $request->pembelajaran
        ]);

        return redirect("/pembelajaran");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("pembelajaran.edit", [
            "title" => "pembelajaran",
            "pembelajaran" => Pembelajaran::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembelajaran = Pembelajaran::find($id);
        if ($request->pembelajaran != $pembelajaran->pembelajaran) {
            $request->validate([
                "pembelajaran" => "unique:pembelajarans"
            ]);
        }
        $pembelajaran->update([
            "pembelajaran" => $request->pembelajaran
        ]);

        return redirect("/pembelajaran");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelajaran  $pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembelajaran::destroy($id);
        return redirect("/pembelajaran");
    }
}
