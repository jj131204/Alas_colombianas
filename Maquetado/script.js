function iniciarMap(){
    var coord = {lat:10.6966159, lng: -74.8741045};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}



/* Buscador header*/

const formulario = document.querySelector('.input_search');

const boton = document.querySelector('.search_result');

const filtrar = ()=>{
  console.log(formulario.value);
}

boton.addEventListener('click', filtrar)
