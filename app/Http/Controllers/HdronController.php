<?php

namespace App\Http\Controllers;

use App\Hdron;
use Illuminate\Http\Request;

class HdronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
      $cantidad = $request->input("cantidad");
        $drones = Hdron::
          where('Ronda',"=",$cantidad)
          ->orderBy('Tiempo')
          ->get();   
        return view('historial.hisDron',compact('drones'));  
        return redirect()->route('/Hdron');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        $archivo_csv = fopen('FFAM.csv','w');

    if($archivo_csv){
    fputs($archivo_csv,"id,NombreRobot,NombreCapitan,NombreEquipo,Institucion,Ronda,Tiempo,Status,created_at,updated_at".PHP_EOL);
    }

    $drones = Hdron::get();

    foreach($drones as $dron){
        fputs($archivo_csv,implode($dron,',').PHP_EOL);
    }
    fclose($archivo_csv);

    return redirect()->route('Drones')->with('success','Registro created successfully.');
  
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
     * @param  \App\Hdron  $hdron
     * @return \Illuminate\Http\Response
     */
    public function show(Hdron $hdron)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hdron  $hdron
     * @return \Illuminate\Http\Response
     */
    public function edit(Hdron $hdron)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hdron  $hdron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hdron $hdron)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hdron  $hdron
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hdron $hdron)
    {
        //


    }
}
