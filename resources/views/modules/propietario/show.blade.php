
@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $propietarios->id }}</td>
                        </tr>
                        <tr>
                            <th>NUMERO DE DOCUMENTO</th>
                            <td>{{ $propietarios->num_cedula }}</td>
                        </tr>
                        <tr>
                            <th>PRIMER NOMBRE</th>
                            <td>{{ $propietarios->prim_nombre }}</td>
                        </tr>
                        <tr>
                            <th>SEGIUNDO NOMBRE</th>
                            <td>{{ $propietarios->seg_nombre }}</td>
                        </tr>
                        <tr>
                            <th>APELLIDOS</th>
                            <td>{{ $propietarios->apellidos }}</td>
                        </tr>
                        <tr>
                            <th>DIRECCION</th>
                            <td>{{ $propietarios->direccion }}</td>
                        </tr>
                        <tr>
                            <th>TELEFONO</th>
                            <td>{{ $propietarios->telefono }}</td>
                        </tr>
                        <tr>
                            <th>CIUDAD</th>
                            <td>{{ $propietarios->ciudad }}</td>
                        </tr>

                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $propietarios->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('propietario.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>

@endsection




