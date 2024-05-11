@extends('layout')

@section('content')
    <div class="container">
        <h1>Bienvenido a mi parcial</h1>
    </div>
@endsection

    <h1>Crear Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo">
        </div>
        <div class="form-group">
            <label for="anio">Año:</label>
            <input type="number" class="form-control" id="anio" name="anio">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
