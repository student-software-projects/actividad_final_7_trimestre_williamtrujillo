@extends('layouts.admin.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('propietario.update',$propietarios->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group mt-5">
                    <label for="num_cedula">Numero de Documento</label>
                    <input name="num_cedula" id="num_cedula" type="text" class="form-control" value="{{$propietarios->num_cedula}}" required>
                </div>
                <div class="form-group mt-5">
                    <label for="prim_nombre">Primer Nombre</label>
                    <input name="prim_nombre" id="prim_nombre" type="text" class="form-control"value="{{$propietarios->prim_nombre}}" required>
                </div>
                <div class="form-group mt-5">
                    <label for="seg_nombre">Segundo Nombre</label>
                    <input name="seg_nombre" id="seg_nombre" type="text" class="form-control" value="{{$propietarios->seg_nombre}}" required>
                </div>
                <div class="form-group mt-5">
                    <label for="apellidos">Apellidos</label>
                    <input name="apellidos" id="apellidos" type="text" class="form-control" value="{{$propietarios->apellidos}}" required>
                </div>
                <div class="form-group mt-5">
                    <label for="direccion">Direccion</label>
                    <input name="direccion" id="direccion" type="text" class="form-control" value="{{$propietarios->direccion}}" required>
                </div>
                <div class="form-group mt-5">
                    <label for="telefono">Telefono</label>
                    <input name="telefono" id="telefono" type="text" class="form-control" value="{{$propietarios->telefono}}" required>
                </div>
                <div class="form-group mt-5">
                    <label for="ciudad">Ciudad</label>
                    <input name="ciudad" id="ciudad" type="text" class="form-control" value="{{$propietarios->ciudad}}" required>
                </div>


                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                <a href="{{ route('propietario.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@endsection



