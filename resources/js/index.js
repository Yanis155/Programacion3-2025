windows.buscarUsuarios= function() {

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
      <img src= "${usuario.picture.medium}" alt="foto">
      <strong> Nombre: </strong> ${usuario.name.first} ${usuario.name.last} <br>
      <strong> Email: </strong> ${new Date(usuario.dob.date).toLocaleDateString()} <br>
      <strong> Telefóno: </strong> ${usuario.phone}  <br>
      <strong> Genero: </strong> ${usuario.gender} <br>
      <strong> ID Nombre: </strong> ${usuario.id.name} <br>
      <strong> ID Numero: </strong> ${usuario.id.value} <br>
      <strong> Fecha de registro </strong> ${new Date(usuario.registered.date).toLocaleDateString()} <br>
      `;

      resultado.appendChild(div);
  });
})
}