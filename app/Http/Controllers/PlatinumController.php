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
            "title" => "Platinum"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function show(Platinum $platinum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function edit(Platinum $platinum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platinum $platinum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platinum  $platinum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platinum $platinum)
    {
        //
    }
}
