<?php

namespace App\Http\Controllers;

use App\Sumos;
use Illuminate\Http\Request;

class SumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('registros.regSumo');
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
     * @param  \App\Sumos  $sumos
     * @return \Illuminate\Http\Response
     */
    public function show(Sumos $sumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sumos  $sumos
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumos $sumos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sumos  $sumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sumos $sumos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sumos  $sumos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sumos $sumos)
    {
        //
    }
}
