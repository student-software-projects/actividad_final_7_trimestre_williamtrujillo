@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('vehiculo.update',$vehiculos->id) }}" method="post">
                    @csrf
                    @method('put')
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
                        <input name="placa" type="text" value="{{$v->placa}}" class="form-control" required>
                    </div>

                    <label for=""> Color</label>
                    <div class="form-group">
                        <input name="color" type="text" value="{{$v->color}}" class="form-control" required>
                    </div>

                    <label for=""> Marca</label>
                    <div class="form-group">
                        <input name="marca" type="text" value="{{$v->marca}}" class="form-control" required>
                    </div>

                    <label for="">Tipo de Vehiculo</label>
                    <div class="form-group">
                        <input name="tp_vehiculo" type="text" value="{{$v->tp_vehiculo}}" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('vehiculo.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection




