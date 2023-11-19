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

        <table class="w-[90%] table-auto">

            <thead class="bg-gray-300 rounded">
                <tr>
                    <th class="py-2 px-4 border-b">Codigo Estudiante</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Apellido</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Teléfono</th>
                    <th class="py-2 px-4 border-b">Dirección</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td class="text-center">{{ $estudiante->id }}</td>
                        <td class="text-start">{{ $estudiante->nombre }}</td>
                        <td class="text-center">{{ $estudiante->apellido }}</td>
                        <td class="text-center">{{ $estudiante->email }}</td>
                        <td class="text-center">{{ $estudiante->telefono }}</td>
                        <td class="text-center">{{ $estudiante->direccion }}</td>
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
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
