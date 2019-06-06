<?php

namespace App\Http\Controllers;

use App\Minosumos;
use Illuminate\Http\Request;

class MinisumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('resultados.resMinisumo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registros.regMiniSumo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $this->validate($request,[ 'Institucion'=>'required','NombreRobot'=>'required','NombreEquipo'=>'required','NombreCapitan'=>'required']);
        //
        $minisumo = new Minosumos;
        $minisumo->Institucion = $request->input('Institucion');
        $minisumo->NombreRobot = $request->input('NombreRobot');
        $minisumo->NombreEquipo = $request->input('NombreEquipo');
        $minisumo->NombreCapitan = $request->input('NombreCapitan');
        $minisumo->Ronda_uno = 'Esperando rondas';
        $minisumo->Ronda_dos = 'Esperando rondas';
        $minisumo->Ronda_tres = 'Esperando rondas';
        $minisumo->Resultado_ronda = 'Esperando rondas';
        $minisumo->Status = 'En competencia';

     
        $minisumo->save();    

        return redirect()->route('Minisumos.create')->with('success','¡Registro guardado exitosamente! :)');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Minosumos  $minosumos
     * @return \Illuminate\Http\Response
     */
    public function show(Minosumos $minosumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Minosumos  $minosumos
     * @return \Illuminate\Http\Response
     */
    public function edit(Minosumos $minosumos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Minosumos  $minosumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Minosumos $minosumos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Minosumos  $minosumos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Minosumos $minosumos)
    {
        //
    }
}
