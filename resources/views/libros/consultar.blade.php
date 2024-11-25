@extends('layouts.app')

@section('content')
    <div class="card-body">

        <!--Formulario-->
        <h5 class="card-title">Buscar Libro por ID</h5>
        <form method="POST" action="{{ route('libros.pdfID') }}">

            @csrf
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" class="form-control" required>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mx-auto d-block">Consultar</button>
            </div>

        </form>
        <!--Formulario-->

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif


    </div>
    <!--</div>-->
@endsection
