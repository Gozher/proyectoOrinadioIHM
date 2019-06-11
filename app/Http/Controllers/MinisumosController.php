<?php

namespace App\Http\Controllers;

use App\Minosumos;
use App\Hminisumo;
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
        
          $grupo_a = \DB::table('Minisumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get();



        $grupo_b = \DB::table('Minisumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get(); 

        return view('calificar.calMinisumo', compact('grupo_a','grupo_b'));
    }


     public function index2()
    {

          $grupo_a = \DB::table('Minisumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get();



        $grupo_b = \DB::table('Minisumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get(); 

        return view('resultados.resMinisumo', compact('grupo_a','grupo_b'));

       
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


           

        $hminosumo = new Hminisumo;
        $hminosumo->Institucion = $request->input('Institucion');
        $hminosumo->NombreRobot = $request->input('NombreRobot');
        $hminosumo->NombreEquipo = $request->input('NombreEquipo');
        $hminosumo->NombreCapitan = $request->input('NombreCapitan');        
        $hminosumo->Ronda = '0';
        $hminosumo->Status = 'En competencia';
        $hminosumo->save();    
        //
        $minosumo = new Minosumos;
        $minosumo->Institucion = $request->input('Institucion');
        $minosumo->NombreRobot = $request->input('NombreRobot');
        $minosumo->NombreEquipo = $request->input('NombreEquipo');
        $minosumo->NombreCapitan = $request->input('NombreCapitan');        
        $minosumo->Ronda = '0';
        $minosumo->Status = 'En competencia';

     
        $minosumo->save();    

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

         return view('editar.editMinisumos',compact('minisumos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Minosumos  $minosumos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $minisumos_data= Minosumos::findOrFail($id);  
        return view('editar.editMinisumos',compact('minisumos_data') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Minosumos  $minosumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //



        $hminisumo = new Hminisumo;
        $hminisumo->Institucion = $request->input('Institucion');
        $hminisumo->NombreRobot = $request->input('NombreRobot');
        $hminisumo->NombreEquipo = $request->input('NombreEquipo');
        $hminisumo->NombreCapitan = $request->input('NombreCapitan');   
        $hminisumo->Ronda = $request->input('Ronda');
        $hminisumo->Status = $request->input('Status');

     
        $hminisumo->save();  

            Minosumos::find($id)->update($request->all());

            return redirect()->route('Minisumos.index')->with('success',' Updated successfully');
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
        $product->delete(); 
        return redirect()->route('calificar.calMiniumos')->with('success','Product deleted successfully');
    }
}
