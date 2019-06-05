<?php

namespace App\Http\Controllers;

use App\Drones;
use Illuminate\Http\Request;

class DronesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $drones = Drones::get();
        return view('resultados.resDron',compact('drones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('registros.regDron');
        
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
        $dron = new Drones;
        $dron->Institucion = $request->input('Institucion');
        $dron->NombreRobot = $request->input('NombreRobot');
        $dron->NombreEquipo = $request->input('NombreEquipo');
        $dron->NombreCapitan = $request->input('NombreCapitan');
        $dron->Ronda = '0';
        $dron->Tiempo = '0.0';
        $dron->Status = 'En competencia';
        $dron->save();        
        return redirect()->route('Drones.create')->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drones  $drones
     * @return \Illuminate\Http\Response
     */
    public function show(Drones $drones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drones  $drones
     * @return \Illuminate\Http\Response
     */
    public function edit(Drones $drones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drones  $drones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drones $drones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drones  $drones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drones $drones)
    {
        //
    }
}
