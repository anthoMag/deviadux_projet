//Déclarations des variables
let geojsonReg = null;

//Récupération de la taille de la page html
let htmlHeight = document.querySelector('html').offsetHeight;

//calibrage de la taille de la map
let mappy = document.getElementById('map');
 mappy.style.height = htmlHeight - 221 + 'px';

 //Affichage des régions avec le fichier geoJson 
 fetch('./asset/js/region.geoJSON')
.then((response) => {
    return response.json();
})
.then(function(body){
    geojsonReg = body; 
    launchMap();
})

//Déclaration de la map
var map =  L.map('map').setView([46, 3.161405], 6);

//lancement de la map
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
    
     map ;
    
    geojsonLayerReg.addTo(map); 
    
    //Style de la map et calibrage des zoom
    L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        className: 'map-tiles',
         minZoom: 6,
        maxZoom: 12,
    }).addTo(map);

    //Icone sur la map
    var warningOrgIcon = L.icon({
        iconUrl: './asset/img/IMG_PINGO/logoO.svg',
        shadowUrl: '',
    
        iconSize:     [20, 20], // size of the icon
        shadowSize:   [50, 64], // size of the shadow
        iconAnchor:   [15, 15], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-5, -5] // point from which the popup should open relative to the iconAnchor
    });

    // Marqueur sur la map, avec les longitude et latitude provenant de la base de données ainsi que le texte et img .
    tabData.forEach((v, k) => {
        window['marker' + k]  = L.marker([v[5], v[6]], {icon: warningOrgIcon}).addTo(map);
        window['marker' + k].bindPopup("<h1>"+v[0]+" ("+v[2]+")</h1><h3>"+v[3]+"</h3><h2>"+v[1]+" Mètres</h2><h3>"+v[4]+"</h3> <img  id='imgPop'  src='../asset/img/IMG_PINGO/"+v[7]+"'/><button type='button' id='rskBtn' onclick='change()'>Risques</button>");
     
        //Zoom quand on clique sur le marqueur
        window['marker' + k].on('click', function(){
            map.setView([v[5],v[6]], 11);
        });
    }
    );
  
    
}

    function change(){
          map;
        
          //longitude et latitude du polygon
        let latlngs = [[47.396019, -0.647586],[47.421956, -0.615330],[47.426834, -0.625243],[47.428692, -0.620995],[47.425295, -0.606446],[47.448886, -0.596345],[47.492077, -0.610913],[47.482152, -0.558840],[47.508970,-0.568915],[47.546755, -0.530072],[47.538643, -0.492808],[47.523035, -0.478838],[47.494905, -0.532527],[47.422443, -0.597240],[47.441500, -0.488433],[47.459445, -0.514767],[47.444399, -0.459037],[47.431710, -0.313384],[47.390682, -0.305300],[47.404361, -0.495264],[47.375043, -0.621714]];
        /* let poly = L.polygon(latlngs, {color:  'rgba(56, 210, 173, 0.47)' }).addTo(map); */
        
        let img= document.getElementById('imgPop');
        
        if (img.src.substr(img.src.lastIndexOf('/'))=='/angers_2019.jpg')  { 
            img.src ='../asset/img/IMG_PINGO/crueAngers.png';
         
             poly= L.polygon(latlngs, {color:  'rgba(56, 210, 173, 0.47)' }).addTo(map); 

    
        }else if (img.src.substr(img.src.lastIndexOf('/')) == '/anduze.jpg') {
            img.src ='/asset/img/IMG_PINGO/crueAnduze.png';
        }
        else if (img.src.substr(img.src.lastIndexOf('/')) == '/cambo_les_bains.jpg'){
            img.src ='/asset/img/IMG_PINGO/crueCambo.png';
        }  
        else if (img.src.substr(img.src.lastIndexOf('/'))=='/crueAngers.png'){
            img.src ='../asset/img/IMG_PINGO/angers_2019.jpg'
           
             map.removeLayer(poly) ;
           
            
        }    else if (img.src.substr(img.src.lastIndexOf('/'))=='/crueAnduze.png'){
            img.src ='/asset/img/IMG_PINGO/anduze.jpg';
            
        }else if (img.src.substr(img.src.lastIndexOf('/'))=='/crueCambo.png'){
            img.src ='/asset/img/IMG_PINGO/cambo_les_bains.jpg';
        }
   
}


    /* map.fitBounds(poly.getBounds());  */




/* https://www.nouvelle-aquitaine.developpement-durable.gouv.fr/IMG/pdf/atlas_cambo_6140_reduit.pdf
-----
https://files.geo.data.gouv.fr/link-proxy/catalogue.sigloire.fr/2020-11-13/5faddb6a6a9fcb45c5f4c0c4/file.zip/telechargement-1604748779-7263/2981eead-479f-4b73-9139-68618c3776dd-1604748779-9408/pdf-complet-n-tri-ange2013-inondable-s-049.zip/territoires-a-risques-important-dinondation-tri-de-angers-val-dauthion-saumur-surfaces-inondables/template-de-catalogue-dattributs.pdf
---------
https://docplayer.fr/59002652-Zonage-du-risque-inondation-a.html
*/
    

    

    



    
   





