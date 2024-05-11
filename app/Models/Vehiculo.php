<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Vehiculo extends Model
{
    use HasFactory;
}
?>

@extends('layout')

@section('title', 'Lista de Vehículos')

@section('content')
    <div class="container">
        <h1 class="title">Lista de Vehículos</h1>
        <a href="{{ route('vehiculos.create') }}" class="button is-primary">Agregar Vehículo</a>
        <table class="table is-fullwidth">
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
                            <div class="buttons">
                                <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="button is-info">Ver</a>
                                <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="button is-warning">Editar</a>
                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger" onclick="return confirm('¿Estás seguro de eliminar este vehículo?')">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
