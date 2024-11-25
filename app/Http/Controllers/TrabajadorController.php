<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;
use App\Models\Tarea;


class TrabajadorController extends Controller
{
    public function index(){
        $trabajadores = Trabajador::all();
        return view('trabajadores.index', compact('trabajadores'));
    }
    public function create(){
        return view('trabajadores.create');
    }
    public function store(Request $request){

        $reglas = [
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:trabajadores,dni',
        ];

        $mensajes = [
            'nombre.required' => 'El nombre es requerido',
            'apellido.required' => 'El apellido es requerido',
            'dni.required' => 'El DNI es requerido',
            'dni.unique' => 'El DNI ya existe',
        ];

        $validated = $request->validate($reglas, $mensajes);

        $trabajador = new Trabajador();
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->dni = $request->dni;
        $trabajador->save();

        return redirect('/trabajadores/index');
    }
    public function show(){
        $trabajadores = Trabajador::all();
        $tareas = Tarea::all();
        return view('trabajadores.show', compact('trabajadores', 'tareas'));
    }
}

