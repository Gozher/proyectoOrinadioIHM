<?php

namespace App\Http\Controllers;

use App\Sumos;
use App\Hsumo;
use App\Minosumos;
use App\Hminisumo;
use App\Drones;
use App\Hdron;
use App\Seguidores;
use App\Hseguidores;

use Illuminate\Http\Request;
use PDF; 

class SumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $grupo_a = \DB::table('Sumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get();



        $grupo_b = \DB::table('Sumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get(); 

        return view('calificar.calSumos', compact('grupo_a','grupo_b'));

       
    }

    public function index2()
    {

          $grupo_a = \DB::table('Sumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get();



        $grupo_b = \DB::table('Sumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get(); 

        return view('resultados.resSumo', compact('grupo_a','grupo_b'));

       
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

        $hsumo = new hsumo;
        $hsumo->Institucion = $request->input('Institucion');
        $hsumo->NombreRobot = $request->input('NombreRobot');
        $hsumo->NombreEquipo = $request->input('NombreEquipo');
        $hsumo->NombreCapitan = $request->input('NombreCapitan');        
        $hsumo->Ronda = '0';
        $hsumo->Status = 'En competencia';
    
        $hsumo->save(); 



        $sumo = new Sumos;
        $sumo->Institucion = $request->input('Institucion');
        $sumo->NombreRobot = $request->input('NombreRobot');
        $sumo->NombreEquipo = $request->input('NombreEquipo');
        $sumo->NombreCapitan = $request->input('NombreCapitan');        
        $sumo->Ronda = '0';
        $sumo->Status = 'En competencia';

     
        $sumo->save();    

        return redirect()->route('Sumos.create')->with('success','¡Registro guardado exitosamente!');



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

        return view('editar.editSumos',compact('sumos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sumos  $sumos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sumos_data= Sumos::findOrFail($id);  
        return view('editar.editSumos',compact('sumos_data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sumos  $sumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $hsumo = new hsumo;
        $hsumo->Institucion = $request->input('Institucion');
        $hsumo->NombreRobot = $request->input('NombreRobot');
        $hsumo->NombreEquipo = $request->input('NombreEquipo');
        $hsumo->NombreCapitan = $request->input('NombreCapitan');        
        $hsumo->Ronda = $request->input('Ronda');
        $hsumo->Status = $request->input('Status');
    
        $hsumo->save();    
        

           Sumos::find($id)->update($request->all());  

            return redirect()->route('Sumos.index')->with('success',' Updated successfully');
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sumos  $sumos
     * @return \Illuminate\Http\Response
     */
    public function destroy( )
    {
        //
        
        Sumos::truncate();
        Hsumo::truncate();
        Minosumos::truncate();
        Hminisumo::truncate();
        Drones::truncate();
        Hdron::truncate();
        Seguidores::truncate();
        Hseguidores::truncate();
 
         return redirect()->route('login')->with('success',' Updated successfully');


    }



 public function datos_pdf_a( )
    {
        
           $grupo_a = \DB::table('Sumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get();

        return $grupo_a;  

    }


 public function datos_pdf_b( )
    {
        
           $grupo_b = \DB::table('Sumos')
        -> select('NombreRobot','Institucion','id','Status','Ronda')
        -> orderBy('Institucion')
        -> where ('Status', 'En Competencia')
        -> get();


        return $grupo_b;  

    }



  public function pdf(Sumos $sumos)
    {
        //



         $pdf = PDF::loadHTML($this->convert_customer_data_to_html()); 

         return $pdf->download('sumo-roles.pdf'); 

    }


    public function convert_customer_data_to_html()
    {
     $sumo_data = $this->datos_pdf_a();
     $sumo_data_b = $this->datos_pdf_b();
     $output = '
     <h3 align="center"> Sumos en competencia </h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%"> id </th>
    <th style="border: 1px solid; padding:12px;" width="30%">Nombre de Robot}</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Status</th>
    <th style="border: 1px solid; padding:12px;" width="15%"> Ronda
        
     ';  
     foreach($sumo_data as $lista)
       
     {
        

      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$lista->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$lista->NombreRobot.'</td>
       <td style="border: 1px solid; padding:12px;">'.$lista->Status.'</td>
       <td style="border: 1px solid; padding:12px;">'.$lista->Ronda.'</td>

      </tr>
      ';

     }
        

     $output .= '</table>';
     return $output;

    }


}
