<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <h3> Por favor, ingrese un id</h3>
    <form action="{{route('student.buscar', $student[0]->id)}}" method="post">
        @csrf
        <input type="text" name="ID" placeholder="Id: " value="{{$student[0]->id}}> <br> <br>
        <button type="submit" name="Enviar modificaciones">Enviar</button>
    </form>
</body>
</html>



