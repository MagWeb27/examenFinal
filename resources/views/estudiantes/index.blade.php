@extends('layouts.public.app')

@section('titulo')
    Registro de estudiantes
@endsection

@section('contenido')
    <div class="py-2 flex justify-center">
        <div class="flex justify-start w-[90%] pl-10">
            <a href="{{ route('estudiantes.create') }}"
                class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
                Nuevo
            </a>
        </div>
    </div>

    <div class="pt-6 flex justify-center">

        <table class="w-[90%]">
            <thead class="bg-gray-300 rounded">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            @foreach ($estudiantes as $estudiante)
                <tbody>
                    <tr>
                        <td>
                            {{ $estudiante->nombre }}
                        </td>
                        <td>
                            {{ $estudiante->apellido }}
                        </td>
                        <td>
                            {{ $estudiante->email }}
                        </td>
                        <td>
                            {{ $estudiante->telefono }}
                        </td>
                        <td>
                            {{ $estudiante->direccion }}
                        </td>
                        <td>
                            <div class="flex justify-center">
                                <a href="{{ route('estudiantes.edit', $estudiante->id) }}"
                                    class="flex justify-center items-center w-[80px] h-[40px] bg-blue-400 hover:bg-blue-500 rounded text-white">
                                    Editar
                                </a>
                                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
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
                </tbody>
        </table>
        @endforeach
    </div>
@endsection
