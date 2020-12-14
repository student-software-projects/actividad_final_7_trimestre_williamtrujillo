@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('vehiculo.create') }}">AGREGAR NUEVO VEHICULO</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>PLACA</th>
                            <th>COLOR</th>
                            <th>MARCA</th>
                            <th>TIPO DE VEHICULO</th>
                            <th>NOMBRE DEL PROPIETARIO</th>
                            <th>NOMBRE DEL CONDUCTOR</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($vehiculos as $vehiculo)
                            <tr>
                                <td>{{ $vehiculo->id }}</td>
                                <td>{{ $vehiculo->placa}}</td>
                                <td>{{ $vehiculo->color}}</td>
                                <td>{{ $vehiculo->marca}}</td>
                                <td>{{ $vehiculo->tp_vehiculo}}</td>
                                <td>{{ $vehiculo->propietarios->prim_nombre.' '.$vehiculo->propietarios->apellidos}}</td>
                                <td>{{ $vehiculo->conductores->prim_nombre.' '.$vehiculo->conductores->apellidos}}</td>
                                <td>
                                    <form action="{{route('vehiculo.destroy',$vehiculo->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('vehiculo.show',$vehiculo->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('vehiculo.edit',$vehiculo->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
