<?php

namespace App\Http\Controllers;

use App\Seguidores;
use Illuminate\Http\Request;

class SeguidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('resultados.resSeguidor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registros.regSeguidor');
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
        $this->validate($request,[ 'Institucion'=>'required','NombreRobot'=>'required','NombreEquipo'=>'required','NombreCapitan'=>'required']);
        //
        $Seguidor = new Seguidores;
        $Seguidor->Institucion = $request->input('Institucion');
        $Seguidor->NombreRobot = $request->input('NombreRobot');
        $Seguidor->NombreEquipo = $request->input('NombreEquipo');
        $Seguidor->NombreCapitan = $request->input('NombreCapitan');
        $Seguidor->Ronda = '0';
        $Seguidor->Tiempo = '0.0';
        $Seguidor->Status = 'En competencia';
        $Seguidor->save();        
        return redirect()->route('Seguidores.create')->with('success','Registro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguidores  $seguidores
     * @return \Illuminate\Http\Response
     */
    public function show(Seguidores $seguidores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguidores  $seguidores
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguidores $seguidores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguidores  $seguidores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seguidores $seguidores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguidores  $seguidores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguidores $seguidores)
    {
        //
    }
}
