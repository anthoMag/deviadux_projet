let geojsonReg = null;

let htmlHeight = document.querySelector('html').offsetHeight;
let mappy = document.getElementById('map');
 mappy.style.height = htmlHeight - 221 + 'px';

 fetch('./asset/js/region.geoJSON')
.then((response) => {
    return response.json();
})
.then(function(body){
    geojsonReg = body; 
    launchMap();
})


function launchMap(){

    // On dessine le polygone
    let geojsonLayerReg = L.geoJSON(geojsonReg, {
        style: {
            "color": "#ffffff",
            "opacity": 1,
            "weight": 1,
            "fillColor": "#08837800",
            "fillOpacity": 0.3
        }
    });
    
    var map = L.map('map').setView([46, 3.161405], 6);
    

    geojsonLayerReg.addTo(map); 
    
    L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        className: 'map-tiles',
         minZoom: 6,
        maxZoom: 12,
    }).addTo(map);

    var warningOrgIcon = L.icon({
        iconUrl: './asset/img/IMG_PINGO/logoO.svg',
        shadowUrl: '',
    
        iconSize:     [20, 20], // size of the icon
        shadowSize:   [50, 64], // size of the shadow
        iconAnchor:   [15, 15], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-5, -5] // point from which the popup should open relative to the iconAnchor
    });

    // MARKER --------->>>>
    tabData.forEach((v, k) => {
        window['marker' + k]  = L.marker([v[5], v[6]], {icon: warningOrgIcon}).addTo(map);
        window['marker' + k].bindPopup("<h1>"+v[0]+" ("+v[2]+")</h1><h3>"+v[3]+"</h3><h2>"+v[1]+" Mètres</h2><h3>"+v[4]+"</h3> <img  id='imgPop'  src='../asset/img/IMG_PINGO/"+v[7]+"'/><button type='button' id='rskBtn' onclick='change()'>Risques</button>");
     
    }
    );

    console.log(tabData);
}


function change(){
    
    let img= document.getElementById('imgPop');

  console.log(img.src.substr(img.src.lastIndexOf('/')));
   if (img.src.substr(img.src.lastIndexOf('/'))=='/angers_2019.jpg')  { 
    img.src ='../asset/img/IMG_PINGO/crueAngers.png';
    
   }else if (img.src.substr(img.src.lastIndexOf('/')) == '/anduze.jpg') {
    img.src ='/asset/img/IMG_PINGO/crueAnduze.png';
    }
    else if (img.src.substr(img.src.lastIndexOf('/')) == '/cambo_les_bains.jpg'){
        img.src ='/asset/img/IMG_PINGO/crueCambo.png';
    }  
  /*     else if{
  
      

    }   */

    console.log(img);
}
 
   
    

    

    



    
   





