<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\juegos;

class micontrolador extends Controller
{
    public function vista1()
    {
        return view('vista1');
    }
    public function vista2()
    {
        return view('vista2');
    }
    public function vista3()
    {
        return view('vista3');
    }
    public function vista4()
    {
        return view('vista4');
    }
    public function vista5()
    {
        return view('vista5');
    }
    public function vista6()
    {
        return view('vista6');
    }
    public function registrarjuegos()
    {
        return view('registrarjuegos');
    }
    public function guardarjuegos(Request $request)
    {
        $juegos = new juegos;
        $juegos->NOMBRE=$request->input('NOMBRE');
        $juegos->EMPRESA=$request->input('EMPRESA');
        $juegos->TIPO=$request->input('TIPO');
        $juegos->save();

        return redirect()->route('registrarjuegos');
    }

    public function consultajuegos(){
        $juegos = juegos::all();
        return view('consulta', compact('juegos'));
    }

    public function eliminarJuego($id){
        $juegos=juegos::find($id);
        $juegos->delete();
        return redirect()->route('consultajuegos');
    }

    public function muestrajuego($id){
        $juegos=juegos::find($id);
        return view('muestrajuego', compact('juegos'));
    }
    
    public function editajuego(Request $request, $id){
        $juegos=juegos::find($id);
        
        $juegos->NOMBRE=$request->input('NOMBRE');
        $juegos->EMPRESA=$request->input('EMPRESA');
        $juegos->TIPO=$request->input('TIPO');
        $juegos->save();
        return redirect()->route('consultajuegos');
    }
}
