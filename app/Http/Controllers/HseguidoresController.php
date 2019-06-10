<?php

namespace App\Http\Controllers;

use App\Hseguidores;
use Illuminate\Http\Request;

class HseguidoresController extends Controller
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
        $seguidores = Hseguidores::
          where('Ronda',"=",$cantidad)
          ->orderBy('Tiempo')
          ->get();   
        return view('historial.hisSeguidor',compact('seguidores'));  
        return redirect()->route('/Hseguidores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Hseguidores  $hseguidores
     * @return \Illuminate\Http\Response
     */
    public function show(Hseguidores $hseguidores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hseguidores  $hseguidores
     * @return \Illuminate\Http\Response
     */
    public function edit(Hseguidores $hseguidores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hseguidores  $hseguidores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hseguidores $hseguidores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hseguidores  $hseguidores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hseguidores $hseguidores)
    {
        //
    }
}
