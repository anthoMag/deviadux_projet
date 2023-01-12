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

 let newTab =  [];
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
    var floviaIcon = L.icon({
        iconUrl: './asset/img/IMG_PINGO/logoO.svg',
        shadowUrl: '',
        iconSize:     [43, 43], 
        shadowSize:   [50, 64], 
        iconAnchor:   [15, 15], 
        shadowAnchor: [4, 62],  
    });
 let count= 0;
 let index = 0;
    // Affichage des marqueurs sur la map, avec les longitudes et latitudes provenant de la base de données ainsi que le texte et img.
    tabData.forEach((v, k) => {
        window['marker' + k]  = L.marker([v[5], v[6]], {icon: floviaIcon}).addTo(map);
        window['marker' + k].bindPopup("<h1>"+v[0]+" ("+v[2]+")</h1><h3>"+v[3]+"</h3><h2>"+v[1]+" Mètres</h2><h3>"+v[4]+"</h3> <a id=\"imgRsk\" href=\"\" target=\"_blank\"><img  id='imgPop'  src='../asset/img/IMG_PINGO/"+v[7]+"'/> </a><button type='button' id='rskBtn' data-code="+count+" onclick='change("+k+")'>Risques</button>");
        count++;
        //Zoom quand on clique sur le marqueur.
        window['marker' + k].on('click', function(){
            map.setView([v[5],v[6]], 11);
        });
    });
}

function change(key){
    
    index = key;
    console.log(tabData[index]);

//On envoie un tableau de tableau à leaflet pour afficher les polygones
let ltlg = JSON.parse(tabData[index][8]);


let imgSwicth2 = tabData[index][9];
let link = tabData[index][10];


//On Récupère l'image
let img= document.getElementById('imgPop');
let imgR = document.getElementById('imgRsk');


//Affichage des photos d'nnondations et switch 
let rButton = document.getElementById('rskBtn');


img.src ='../asset/img/IMG_PINGO/'+imgSwicth2;
imgR.href=  link;
/* map.removeLayer(poly) ; */
poly= L.polygon(ltlg, {color:  'rgba(56, 210, 173, 0.47)' }).addTo(map); 
    
    //affichage de la zone de risque maximum de crue d'Angers.
    
    //Switch photo anduze quand on clique sur le boutton"risques" sur les zones innondable répertoriés par l'état.
}
map.on('click', removePoly);


function removePoly(){

    map.removeLayer(poly) ;

}


/* https://www.nouvelle-aquitaine.developpement-durable.gouv.fr/IMG/pdf/atlas_cambo_6140_reduit.pdf
-----
https://files.geo.data.gouv.fr/link-proxy/catalogue.sigloire.fr/2020-11-13/5faddb6a6a9fcb45c5f4c0c4/file.zip/telechargement-1604748779-7263/2981eead-479f-4b73-9139-68618c3776dd-1604748779-9408/pdf-complet-n-tri-ange2013-inondable-s-049.zip/territoires-a-risques-important-dinondation-tri-de-angers-val-dauthion-saumur-surfaces-inondables/template-de-catalogue-dattributs.pdf
---------
https://docplayer.fr/59002652-Zonage-du-risque-inondation-a.html
*/
    

    

    



    
   




