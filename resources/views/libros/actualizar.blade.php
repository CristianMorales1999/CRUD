<!-- Modal -->
<div class="modal fade" id="modal{{$libro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Libro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Formulario-->
                <form method="POST" action="{{route('libros.update',$libro)}}">

                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="{{$libro->nombre}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" value="{{$libro->descripcion}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <input type="text" id="autor" name="autor" value="{{$libro->autor}}" class="form-control" required>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary mx-auto d-block">Actualizar</button>
                    </div>
                </form>
                <!---->
            </div>
        </div>
    </div>
</div>
