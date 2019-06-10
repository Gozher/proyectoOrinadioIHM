<?php

namespace App\Http\Controllers;

use App\Seguidores;
use App\Hseguidores;
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
        //return view('resultados.resSeguidor');
        $seguidores = Seguidores:: 
          orderBy('Tiempo')
        ->where('Status','En competencia')
        ->get();        
        return view('calificar.calSeguidor',compact('seguidores'));  
    }


    public function index2(Request $request)
    {
        
        //return view('resultados.resSeguidor');            
        $cantidad = $request->input("cantidad");
        $seguidores = Seguidores::        
          where('Ronda',"=",$cantidad)
        ->where('Status','En competencia')
        ->orderBy('Tiempo')
        ->get();    

        return view('resultados.resSeguidor',compact('seguidores'));
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


        $hseguidor = new Hseguidores;
        $hseguidor->Institucion = $request->input('Institucion');
        $hseguidor->NombreRobot = $request->input('NombreRobot');
        $hseguidor->NombreEquipo = $request->input('NombreEquipo');
        $hseguidor->NombreCapitan = $request->input('NombreCapitan');
        $hseguidor->Ronda = '0';
        $hseguidor->Tiempo = '0.0';
        $hseguidor->Status = 'En competencia';
        $hseguidor->save();  




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
    public function edit($id)
    {
        //
         $seguidores = Seguidores::find($id);
        return view('editar.editSeguidor', compact('seguidores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguidores  $seguidores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $hseguidor = new Hseguidores;
        $hseguidor->Institucion = $request->input('Institucion');
        $hseguidor->NombreRobot = $request->input('NombreRobot');
        $hseguidor->NombreEquipo = $request->input('NombreEquipo');
        $hseguidor->NombreCapitan = $request->input('NombreCapitan');
        $hseguidor->Ronda = $request->input('Ronda');
        $hseguidor->Tiempo = $request->input('Tiempo');
        $hseguidor->Status = $request->input('Status');
        $hseguidor->save(); 


         Seguidores::find($id)->update($request->all());

        return redirect()->route('Seguidores.index')->with('success',' Updated successfully');
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
