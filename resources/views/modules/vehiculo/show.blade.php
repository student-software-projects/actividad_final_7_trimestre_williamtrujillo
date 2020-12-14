@extends('layouts.admin.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $equipos->id }}</td>
                        </tr>
                        <tr>
                            <th>NOMBRE EQUIPO</th>
                            <td>{{ $equipos->nombre_equipo }}</td>
                        </tr>
                        <tr>
                            <th>LOGO</th>
                            <td>{{ $equipos->logo }}</td>
                        </tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $equipos->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('vehiculo.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>




@endsection
