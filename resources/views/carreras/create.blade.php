@extends('layouts.public.app')

@section('titulo')
    Registro de carreras
@endsection

@section('contenido')
    <div>
        <div class="flex justify-center py-2">
            <div class="flex justify-end w-[80%] pl-10 ">
                <a href="{{ route('carreras.index') }}"
                    class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
                    Regresar
                </a>
            </div>
        </div>

        {{ Aire::open()->route('carreras.store') }}
            {{ Aire::input('nombre', 'Nombre') }}
            {{ Aire::input('descripcion', 'Descripción') }}
            {{ Aire::submit('Crear') }}
        {{ Aire::close() }}
    </div>
@endsection