//inicializamos mapa

var miMapa = L.map('mapa').setView([40.463667,-3.74922], 6);

//cargamos con metodo tileLayer capa con estilos de Mapbox


L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
maxZoom: 18
}).addTo(miMapa)

L.control.scale().addTo(miMapa);

//añadimos marcador y popup
var marker = L.marker([41.65518,-4.72372], {draggable:false}).addTo(miMapa);

marker.bindPopup("<h1>La Talaia</h1><p>Torre de vigilància construïda en una època on sovintejaven els atacs corsaris a la costa catalana. Formava part de l'antic mas Modolell de la Torre, situat a la sortida del poble, cap a Cornellà. Va ser construïda el 1587 i traslladada al seu actual emplaçament, el carrer del Xipreret, el 1972, quan es va enderrocar la masia. És una torre de planta quadrada, de cinc pisos, el més alt dels quals està obert als quatre cantons mitjançant tres arcades adovellades de punt rodó. Sembla que les arcades superiors no són les originals, que eren gòtiques i que, segons fonts no contrastades, havien desaparegut temps abans.</p>.",estiloPopup);
var popup = L.popup();

var estiloPopup =
      {
      'maxWidth': '500'
      }

      