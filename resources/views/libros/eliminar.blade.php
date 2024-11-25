@extends('layouts.app')

@section('content')
    <!--<div class="card" style="width: 18rem;">-->
    <div class="card-body">

        <!--Formulario-->
        <h5 class="card-title">Eliminar un libro</h5>
        <form method="POST" action="{{ route('libros.destroy') }}">

            @csrf
            <div class="form-group">
                <label for="IdLibro">Id del libro:</label>
                <input type="text" id="IdLibro" name="IdLibro" class="form-control" required>
            </div>

            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mx-auto d-block">Eliminar</button>
            </div>
        </form>
        <!--Formulario-->

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-success" role="alert">
                {{ session('error') }}
            </div>
        @endif

    </div>
    <!--</div>-->
@endsection
