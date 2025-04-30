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
    <h3> Por favor, ingrese una cantidad de usuarios: </h3>

    <input type="number" id="usuario" placeholder="Ingresar: " min="1">
    <button onclick="buscarUsuarios()">Enviar</button>
    
    <div id="resultado"></div>

    <script>

        function buscarUsuarios() {

            //traer usuarios de la Api
            const usuario = document.getElementById('usuario').value;
            const resultado = document.getElementById('resultado');

            const url = `https://randomuser.me/api/?results=${usuario}`;
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    data.results.forEach(usuario => {
                        const div = document.createElement("div");
                        div.innerHTML = `
                <img src= "${usuario.picture.medium}" alt="foto"> <br>
                <strong> Nombre: </strong> ${usuario.name.first} ${usuario.name.last} <br>
                <strong> Email: </strong> ${new Date(usuario.dob.date).toLocaleDateString()} <br>
                <strong> Telefóno: </strong> ${usuario.phone}  <br>
                <strong> Genero: </strong> ${usuario.gender} <br>
                <strong> ID Nombre: </strong> ${usuario.id.name} <br>
                <strong> ID Numero: </strong> ${usuario.id.value} <br>
                <strong> Fecha de registro </strong> ${new Date(usuario.registered.date).toLocaleDateString()} <br>
                <hr>
                `;

                resultado.appendChild(div);
            });
        })
            
        }
    </script> 
</body>
</html>