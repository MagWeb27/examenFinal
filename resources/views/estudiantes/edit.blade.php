@extends('layouts.public.app')

@section('titulo')
    Editar datos del estudiante
@endsection

@section('contenido')
<div class="flex justify-center py-2">
    <div class="flex justify-end w-[80%] pl-10 ">
        <a href="{{ route('estudiantes.index') }}" class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
            Regresar
        </a>
    </div>
</div>

{{ Aire::open()->route('estudiantes.update', $estudiante)->method('put') }}
    {{ Aire::input('nombre', 'Nombre')->value($estudiante->nombre) }}
    {{ Aire::input('apellido', 'Apellido')->value($estudiante->apellido) }}
    {{ Aire::input('cedula', 'Cédula')->value($estudiante->cedula) }}
    {{ Aire::input('email', 'Email')->value($estudiante->email) }}
    {{ Aire::input('telefono', 'Teléfono')->value($estudiante->telefono) }}
    {{ Aire::input('direccion', 'Dirección')->value($estudiante->direccion) }}
    {{ Aire::select($carreras, 'Carrera')->defaultValue($estudiante->carrera_id)->id('carrera')->name('carrera_id') }}
    {{ Aire::submit('Actualizar') }}
{{ Aire::close() }}
@endsection