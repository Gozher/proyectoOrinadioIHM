<?php

namespace App\Http\Controllers;

use App\Hsumo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $hsumo_consult = \DB::table('hsumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda','NombreEquipo','NombreCapitan')
        -> orderBy('Ronda')
        -> get(); 

        return view('historial.hisSumo', compact('hsumo_consult'));

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
     * @param  \App\Hsumo  $hsumo
     * @return \Illuminate\Http\Response
     */
    public function show(Hsumo $hsumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hsumo  $hsumo
     * @return \Illuminate\Http\Response
     */
    public function edit(Hsumo $hsumo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hsumo  $hsumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hsumo $hsumo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hsumo  $hsumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hsumo $hsumo)
    {
        //
    }
}
