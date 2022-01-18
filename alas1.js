function iniciarMap(){
    var coord = {lat:10.6966159, lng: -74.8741045};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
 
    var marker = new google.maps.Marker({
        position: coord,
        map: map,
        icon: 'baseline_room_white_24dp.png'
      });
      
   let Barranquilla = {lat:11.0041072, lng: -74.8069813}; 
   
   let marker1 = new google.maps.Marker({
     position: Barranquilla,
     map: map
   });
 
   let Soledad = {lat:10.9099823, lng: -74.807543};
   let marker2 = new google.maps.Marker({
     position: Soledad,
     map: map
   });
 
   let Malanbo = {lat:10.8575824, lng: -74.7746834};
   var marker3  = new google.maps.Marker({
     position: Malanbo,
     map: map
   }); 
 
   let PuertoColombia = {lat:11.001004, lng: -74.950761};
   let marker4 = new google.maps.Marker({
     position: PuertoColombia,
     map: map
   });  
 
   let SantoTomas = {lat:10.763286, lng: -74.756499};
   let marker5 = new google.maps.Marker({
     position: SantoTomas,
     map: map
   }); 
 
   let Luruaco = {lat:10.6104139, lng: -75.1432436};
   let marker6 = new google.maps.Marker({
     position: Luruaco,
     map: map
   }); 

   marker.addListener("click", () => {
       window.open(href="T_Aves.php");
   });
   marker1.addListener("click", () => {
     window.open(href="departamentos.php?identi_ave=1");
   });
 
   marker2.addListener("click", () => {
     window.open(href="departamentos.php?identi_ave=2");
   });
 
   marker3.addListener("click", () => {
     window.open(href="departamentos.php?identi_ave=3");
   });
 
   marker4.addListener("click", () => {
     window.open(href="departamentos.php?identi_ave=4");
   });

   marker5.addListener("click", () => {
    window.open(href="departamentos.php?identi_ave=7");
  });

  marker6.addListener("click", () => {
    window.open(href="departamentos.php?identi_ave=8");
  });
}
