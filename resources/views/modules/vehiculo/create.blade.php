@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('vehiculo.store') }}" method="post">
                    @csrf

                    <div class="form-group mt-5">
                        <label for="propietario_id">Propietarios</label>
                        <select name="propietario_id" id="propietario_id" class="form-control" required>
                            <option value="0">Seleccione</option>
                            @foreach($propietarios as $propietario)
                                <option value="{{$propietario->id}}"> {{  $propietario->num_cedula.' - '.$propietario->prim_nombre.' '.$propietario->seg_nombre.' '.$propietario->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-5">
                        <label for="conductor_id">Conductores</label>
                        <select name="conductor_id" id="conductor_id" class="form-control" required>
                            <option value="0">Seleccione</option>
                            @foreach($conductores as $conductor)
                                <option value="{{$conductor->id}}"> {{  $conductor->num_cedula.' - '.$conductor->prim_nombre.' '.$conductor->seg_nombre.' '.$conductor->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>


                    <label for=""> Placa</label>
                    <div class="form-group">
                        <input name="placa" type="text" class="form-control" required>
                    </div>

                    <label for=""> Color</label>
                    <div class="form-group">
                        <input name="color" type="text" class="form-control" required>
                    </div>

                    <label for=""> Marca</label>
                    <div class="form-group">
                        <input name="marca" type="text" class="form-control" required>
                    </div>

                    <label for="">Tipo de Vehiculo</label>
                    <div class="form-group">
                        <input name="tp_vehiculo" type="text" class="form-control" required>
                    </div>


                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR NUEVO VEHICULO</button>
                    <a href="{{ route('vehiculo.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
