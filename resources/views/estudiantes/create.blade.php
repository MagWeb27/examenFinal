@extends('layouts.public.app')

@section('titulo')
    Registro de estudiantes
@endsection

@section('contenido')
<div class="flex justify-center py-2">
    <div class="flex justify-end w-[80%] pl-10 ">
        <a href="{{ route('estudiantes.index') }}" class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
            Regresar
        </a>
    </div>
</div>

{{ Aire::open()->route('estudiantes.store') }}
    {{ Aire::input('nombre', 'Nombre') }}
    {{ Aire::input('apellido', 'Apellido') }}
    {{ Aire::input('cedula', 'Cédula') }}
    {{ Aire::input('email', 'Email') }}
    {{ Aire::input('telefono', 'Teléfono') }}
    {{ Aire::input('direccion', 'Dirección') }}
    {{ Aire::select($carreras)->id('carrera')->name('carrera')->label('Carrera') }}
    {{ Aire::submit('Crear') }}
{{ Aire::close() }}
@endsection