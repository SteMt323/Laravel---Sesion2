@extends('welcome')
@section('content')

    <h2>Contactos</h2>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea class="form-control" id="mensaje" rows="5"></textarea>
    </div>
    <button type="button" class = "btn btn-outline-primary">Enviar</button>
@endsection