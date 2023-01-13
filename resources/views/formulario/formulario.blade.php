@extends('app.app')

@section('title', 'Nuevos datos')

@section('contenido')
    <h3>Registrar datos</h3>
    <form action="{{ route('formulario.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputModulo" class="for-label">Nombre del modulo</label>
                <input type="text" name="modulo" id="InputModulo" class="form-control" placeholder="...">
            </div>

            <div class="col-sm-12">
                <label for="InputNumSesion" class="for-label">Numero de sesion</label>
                <input type="text" name="numdesesion" id="InputNumSesion" class="form-control" placeholder="...">
            </div>

            <div class="col-sm-12">
                <label for="InputModapren" class="for-label">Modo de aprendizaje</label>
                <input type="text" name="modapren" id="InputModapren" class="form-control" placeholder="...">
            </div>

            <div class="col-sm-12 text-end" >
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
