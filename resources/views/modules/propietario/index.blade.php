@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('propietario.create') }}">CREAR NUEVO PROPIETARIO</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>DOCUMENTO DE IDENTIDAD</th>
                            <th>PRIMER NOMBRE</th>
                            <th>SEGUNDO NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>DIRECCION</th>
                            <th>TELEFONO</th>
                            <th>CIUDAD</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($propietarios  as $propietario)
                            <tr>
                                <td>{{ $propietario->id }}</td>
                                <td>{{ $propietario->num_cedula}}</td>
                                <td>{{ $propietario->prim_nombre}}</td>
                                <td>{{ $propietario->seg_nombre}}</td>
                                <td>{{ $propietario->apellidos}}</td>
                                <td>{{ $propietario->direccion}}</td>
                                <td>{{ $propietario->telefono}}</td>
                                <td>{{ $propietario->ciudad}}</td>
                                <td>
                                    <form action="{{route('propietario.destroy',$propietario->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('propietario.show',$propietario->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('propietario.edit',$propietario->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
