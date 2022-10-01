@extends('layout.plantilla')
@section('title', 'Pasajes')
@section('card-title', 'Pasajes')
@section('content')
<a href="">
    Registrar Nuevo Pasaje
</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Precio</th>
                <th>Destino</th>
                <th>Fecha del Viaje</th>
                <th>Asiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pasajes as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->dni}}</td>
                    <td>{{$p->nombres}}</td>
                    <td>{{$p->apellidos}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->destino}}</td>
                    <td>{{$p->fechaviaje}}</td>
                    <td>{{$p->asiento}}</td>
                    <td>
                        <button class="btn btn-success" title="Editar">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-danger" title="Eliminar">
                        <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$pasajes->links()}}
@endsection
