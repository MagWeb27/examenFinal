@extends('layouts.public.app')

@section('titulo')
    Editar datos de la carrera
@endsection

@section('contenido')
<div class="flex justify-center py-2">
    <div class="flex justify-end w-[80%] pl-10 ">
        <a href="{{ route('carreras.index') }}" class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
            Regresar
        </a>
    </div>
</div>

{{ Aire::open()->route('carreras.update', $carrera)->method('put') }}
    {{ Aire::input('nombre', 'Nombre')->value($carrera->nombre) }}
    {{ Aire::input('descripcion', 'Descripcion')->value($carrera->descripcion) }}
    {{ Aire::submit('Actualizar') }}
{{ Aire::close() }}
@endsection