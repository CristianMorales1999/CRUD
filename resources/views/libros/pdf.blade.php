<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }
    h1{
        text-align: center;
        color: #333;
    }
    table{
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th,td{
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    th{
        background-color: #f2f2f2;
    }
    tr:nth-child(even){
        background-color: #f9f9f9;
    }
    tr:hover{
        background-color: #e9e9e9;
    }
</style>

<h1>Listado de Libros</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Autor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->nombre }}</th>
                <td>{{ $libro->descripcion }}</td>
                <td>{{ $libro->autor }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
