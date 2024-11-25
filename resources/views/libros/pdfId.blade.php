<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$libro->nombre}}</title>
    <style>
        body{
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .container{
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 600px;
            margin: 0 auto;
        }
        h1{
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        p{
            margin-bottom: 10px;
        }
        strong{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Libro</h1>
        <p>
            <strong>ID:</strong>
            {{$libro->id}}
        </p>
        <p>
            <strong>Nombre:</strong>
            {{$libro->nombre}}
        </p>
        <p>
            <strong>Descripcion:</strong>
            {{$libro->descripcion}}
        </p>
        <p>
            <strong>Autor:</strong>
            {{$libro->autor}}
        </p>
    </div>
    
</body>
</html>