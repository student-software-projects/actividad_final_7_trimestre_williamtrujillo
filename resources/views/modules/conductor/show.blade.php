@extends('layouts.admin.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $conductores->id }}</td>
                        </tr>
                        <tr>
                            <th>NUMERO DE DOCUMENTO</th>
                            <td>{{ $conductores->num_cedula }}</td>
                        </tr>
                        <tr>
                            <th>PRIMER NOMBRE</th>
                            <td>{{ $conductores->prim_nombre }}</td>
                        </tr>
                        <tr>
                            <th>SEGIUNDO NOMBRE</th>
                            <td>{{ $conductores->seg_nombre }}</td>
                        </tr>
                        <tr>
                            <th>APELLIDOS</th>
                            <td>{{ $conductores->apellidos }}</td>
                        </tr>
                        <tr>
                            <th>DIRECCION</th>
                            <td>{{ $conductores->direccion }}</td>
                        </tr>
                        <tr>
                            <th>TELEFONO</th>
                            <td>{{ $conductores->telefono }}</td>
                        </tr>
                        <tr>
                            <th>CIUDAD</th>
                            <td>{{ $conductores->ciudad }}</td>
                        </tr>

                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $conductores->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('conductor.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>




@endsection
