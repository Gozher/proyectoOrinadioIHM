<?php

namespace App\Http\Controllers;

use App\Drones;
use App\Hdron;
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
        
        //$drones = Drones::get();        
        //$drones = Drones::latest()->paginate(5);
        $drones = Drones:: 
          orderBy('Tiempo')
        ->where('Status','En competencia')
        ->get();        
        return view('calificar.calDrones',compact('drones'));   


                                
        
    }

      public function index2(Request $request)
    {
        
        
        $cantidad = $request->input("cantidad");
        $drones = Drones::        
          where('Ronda',"=",$cantidad)
        ->where('Status','En competencia')
        ->orderBy('Tiempo')
        ->get();    

        return view('resultados.resDron',compact('drones'));
         //return redirect()->route('/resDrones');
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

        $hdron = new Hdron;
        $hdron->Institucion = $request->input('Institucion');
        $hdron->NombreRobot = $request->input('NombreRobot');
        $hdron->NombreEquipo = $request->input('NombreEquipo');
        $hdron->NombreCapitan = $request->input('NombreCapitan');
        $hdron->Ronda = '0';
        $hdron->Tiempo = '0.0';
        $hdron->Status = 'En competencia';
        $hdron->save();  




        return redirect()->route('Drones.create')->with('success','Registro created successfully.');
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
    public function edit($id)
    {
        //
        //return view('editar.editDron',compact('drones'));

         $drones = Drones::find($id);
        return view('editar.editDron', compact('drones'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drones  $drones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hdron = new Hdron;
        $hdron->Institucion = $request->input('Institucion');
        $hdron->NombreRobot = $request->input('NombreRobot');
        $hdron->NombreEquipo = $request->input('NombreEquipo');
        $hdron->NombreCapitan = $request->input('NombreCapitan');
        $hdron->Ronda = $request->input('Ronda');
        $hdron->Tiempo = $request->input('Tiempo');
        $hdron->Status = $request->input('Status');
        $hdron->save(); 

        //$drones->update($request->all());

         Drones::find($id)->update($request->all());

        return redirect()->route('Drones.index')->with('success',' Updated successfully');
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
