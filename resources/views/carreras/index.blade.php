@extends('layouts.public.app')

@section('titulo')
    Registro de carreras
@endsection

@section('contenido')
    <div class="py-2 flex justify-center">
        <div class="flex justify-start w-[90%] pl-10">
            <a href="{{ route('carreras.create') }}"
                class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
                Nueva
            </a>
        </div>
    </div>

    <div class="pt-6 flex justify-center">

        <table class="w-[90%]">
            <thead class="bg-gray-300 rounded">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carreras as $carrera)
                    <tr>
                        <td>
                            {{ $carrera->nombre }}
                        </td>
                        <td>
                            {{ $carrera->descripcion }}
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <a href="{{ route('carreras.edit', $carrera->id) }}"
                                    class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
                                    Editar
                                </a>
                                <form action="{{ route('carreras.destroy', $carrera->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex justify-center items-center w-[80px] h-[40px] bg-red-400 hover:bg-red-500 rounded text-white">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
