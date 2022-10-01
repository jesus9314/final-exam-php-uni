@extends('layout.plantilla')
@section('title', 'Pasajes')
@section('card-title', 'Pasajes')
@section('content')
    <a href={{ route('pasajes.create') }} class="btn btn-primary my-2">
        <i class="fa-solid fa-plane"></i> Registrar Nuevo Pasaje
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">DNI</th>
                <th class="text-center">Nombres</th>
                <th class="text-center">Apellidos</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Destino</th>
                <th class="text-center">Fecha del Viaje</th>
                <th class="text-center">Asiento</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pasajes as $p)
                <tr>
                    <td class="text-center">{{ $p->id }}</td>
                    <td class="text-center">{{ $p->dni }}</td>
                    <td class="text-center">{{ $p->nombres }}</td>
                    <td class="text-center">{{ $p->apellidos }}</td>
                    <td class="text-center">{{ $p->precio }}</td>
                    <td class="text-center">{{ $p->destino }}</td>
                    <td class="text-center">{{ $p->fechaviaje }}</td>
                    <td class="text-center">{{ $p->asiento }}</td>
                    <td class="d-flex gap-1 justify-content-center">
                        <a class="btn btn-success" title="Editar" href="{{ route('pasajes.edit', $p) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('pasajes.destroy', $p) }}" onclick="return confirm('Estás seguro que deseas Eliminar este registro?')"method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" title="Eliminar">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pasajes->links() }}
@endsection
