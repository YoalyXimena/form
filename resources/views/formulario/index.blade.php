@extends('app.app')

@section('title', 'Listado de datos')

@section('contenido')
    <h3>Listado de datos</h3>
    <table >
        <thead>
            <tr>
                <th>
                    Modulo
                </th>
                <th>
                    Numero de sesión
                </th>
                <th>
                    Modo de aprendizaje
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($formularios as $formulario)
            <tr>
                <td>
                    {{ form-> modulo}}
                </td>
                <td>
                    {{ form-> numdesesion}}
                </td>
                <td>
                    {{ form-> modapren}}
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
