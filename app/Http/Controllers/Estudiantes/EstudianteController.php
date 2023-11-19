<?php

namespace App\Http\Controllers\Estudiantes;

use App\Models\Carrera;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();

        $data = compact('estudiantes');

        return view('estudiantes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::all()->pluck('nombre', 'id')->toArray();

        return view('estudiantes.create', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'carrera' => 'required',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')->with('success','Estudiante registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        $data = compact('estudiante');

        return view('estudiantes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'carrera' => 'required',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')->with('success','Estudiante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success','Estudiante eliminado correctamente');
    }
}
