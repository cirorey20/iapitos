<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo Electronico De AGAPITOS</h1>
    
    <p>Pedido de producto: <strong>{{$contacto['producto']}}<br></strong></p>  
    <p>Monto tontal: <strong>${{$contacto['precio']}}</strong></p>  

    <p><strong>Nombre: </strong>{{$contacto['name']}}</p>
    <p><strong>Correo: </strong>{{$contacto['correo']}}</p>
    <p><strong>Tel/Cel: </strong>{{$contacto['telefono']}}</p>
    <p><strong>Dirección: </strong>{{$contacto['direccion']}}</p>
    <p><strong>Cuidad: </strong>{{$contacto['ciudad']}}</p>
    <p><strong>Provincia: </strong>{{$contacto['provincia']}}</p>
    <p><strong>Código Postal: </strong>{{$contacto['cp']}}</p>
</body>
</html>