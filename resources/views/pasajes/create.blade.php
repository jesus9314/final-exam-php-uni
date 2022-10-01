@extends('layout.plantilla')
@section('title', 'Registro')
@section('card-title', 'Registrar Nuevo Pasaje')
@section('content')
    <form>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="number" class="form-control" name="dni">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
