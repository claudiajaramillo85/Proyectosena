<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrearEquipo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipos=CrearEquipo::orderBy('id_equipo','DESC')->paginate(3);
        return view('Libro.index')->with('equipos', $equipos); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Libro.create');
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
        $this->validate($request,[ 'codigo_barras_equipo'=>'required', 'marca_portatil'=>'required', 'referencia_portatil'=>'required', 'serial_portatil'=>'required', 'serial_cargador'=>'required', 'novedades'=>'required', 'disponibilidad'=>'required']);
        CrearEquipo::create($request->all());
        return redirect()->route('equipo.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_equipo)
    {
        //
        $equipos=CrearEquipo::find($id_equipo);
        return  view('equipo.show')->with('equipos', $equipos); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_equipo)
    {
        //
        $equipos=CrearEquipo::find($id_equipo);
        return view('Libro.edit')->with('equipos', $equipos); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_equipo)
    {
        //
         $this->validate($request,[ 'codigo_barras_equipo'=>'required', 'marca_portatil'=>'required', 'referencia_portatil'=>'required', 'serial_portatil'=>'required', 'serial_cargador'=>'required', 'novedades'=>'required', 'disponibilidad'=>'required']);

        CrearEquipo::find($id_equipo)->update($request->all());
        return redirect()->route('equipo.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_equipo)
    {
        //
        CrearEquipo::find($id_equipo)->delete();
        return redirect()->route('equipo.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
