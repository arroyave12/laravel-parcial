@extends('layout')

@section('content')
    <div class="container">
        <h1>Bienvenido a mi parcial</h1>
    </div>
@endsection

    <h1>Lista de Vehículos</h1>
    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary">Crear Vehículo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->id }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->anio }}</td>
                    <td>
                        <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este vehículo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
