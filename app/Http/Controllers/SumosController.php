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
        $sumos_data = Sumos::latest()->paginate(5);
        return view('calificar.calSumos',compact('sumos_data'))->with('i', (request()->input('page', 1) - 1) * 5);

       
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

         $this->validate($request,[ 'Institucion'=>'required','NombreRobot'=>'required','NombreEquipo'=>'required','NombreCapitan'=>'required']);
        //
        $sumo = new Sumos;
        $sumo->Institucion = $request->input('Institucion');
        $sumo->NombreRobot = $request->input('NombreRobot');
        $sumo->NombreEquipo = $request->input('NombreEquipo');
        $sumo->NombreCapitan = $request->input('NombreCapitan');
        $sumo->Ronda_uno = 'Esperando rondas';
        $sumo->Ronda_dos = 'Esperando rondas';
        $sumo->Ronda_tres = 'Esperando rondas';
        $sumo->Resultado_ronda = 'Esperando rondas';
        $sumo->Status = 'En competencia';

     
        $sumo->save();    

        return redirect()->route('Sumos.create')->with('success','¡Registro guardado exitosamente! :)');



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

        return view('Sumos.show',compact('sumos'));
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

        return view('Sumos.edit',compact('sumos'));
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

         $request->validate([
            'id' => 'required',
          
        ]);
        $id->update($request->all());
        return redirect()->route('calificar.calSumos')->with('success','Product updated successfully');

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
         $product->delete(); 
        return redirect()->route('calificar.calSumos')->with('success','Product deleted successfully');
    }
}
