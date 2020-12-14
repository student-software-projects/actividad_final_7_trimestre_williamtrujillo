@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('conductor.create') }}">AGREGAR NUEVO CONDUCTOR</a>
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
                        @foreach($conductores  as $conductor)
                            <tr>
                                <td>{{ $conductor->id }}</td>
                                <td>{{ $conductor->num_cedula}}</td>
                                <td>{{ $conductor->prim_nombre}}</td>
                                <td>{{ $conductor->seg_nombre}}</td>
                                <td>{{ $conductor->apellidos}}</td>
                                <td>{{ $conductor->direccion}}</td>
                                <td>{{ $conductor->telefono}}</td>
                                <td>{{ $conductor->ciudad}}</td>
                                <td>
                                    <form action="{{route('conductor.destroy',$conductor->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('conductor.show',$conductor->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('conductor.edit',$conductor->id)}}" class="btn btn-sm btn-warning">Editar</a>
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
