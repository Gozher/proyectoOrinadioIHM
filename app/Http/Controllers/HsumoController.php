<?php

namespace App\Http\Controllers;

use App\Hsumo;
use App\Sumos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $cantidad = $request->input("cantidad");  
          $hsumo_consult = \DB::table('hsumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda','NombreEquipo','NombreCapitan')
        ->where('Ronda',"=",$cantidad)
        -> orderBy('NombreRobot')
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
        
        //$grupo_a = \DB::table('Sumos')
        $grupo_a =Sumos::        
        select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get();



        $grupo_b = Sumos::
        select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get(); 

        return view('resultados.resSumo', compact('grupo_a','grupo_b'));



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
