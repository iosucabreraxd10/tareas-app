<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Trabajador;

class TareaController extends Controller
{
    public function index(){
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }
    public function create(){
        $trabajadores = Trabajador::all();

        return view('tareas.create', compact('trabajadores'));
    }
    public function edit(){
        $trabajadores = Trabajador::all();
        $tareas = Tarea::all();
        
        return view('tareas.edit', compact('trabajadores'), compact('tareas'));
    }

    public function store(Request $request){
        $tarea = new Tarea();
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;
        $tarea->save();

        return redirect('/tareas/index');
    }
    public function update(Request $request){
        $trabajador = Trabajador::find(1);
        $tarea = new Tarea();
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;
        $tarea->save();

        //$pelicula = Tarea::where("ano", 2000)->update(["ano" => 2020]);

        //return $pelicula;
    }

}
