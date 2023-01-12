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
    .then(function (body) {
        geojsonReg = body;
        launchMap();
    })

let newTab = [];
//Déclaration de la map
var map = L.map('map').setView([46, 3.161405], 6);

//lancement de la map
function launchMap() {

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
    map;
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
        iconSize: [43, 43],
        shadowSize: [50, 64],
        iconAnchor: [15, 15],
        shadowAnchor: [4, 62],
    });

    let index = 0;
    let count = 0;
    // Affichage des marqueurs sur la map, avec les longitudes et latitudes provenant de la base de données ainsi que le texte et img.
    tabData.forEach((v, k) => {
        let linkString = "";
        if ([v[10]] != "#") {
            linkString = 'target="_blank"';
        }
        window['marker' + k] = L.marker([v[5], v[6]], { icon: floviaIcon }).addTo(map);
        window['marker' + k].bindPopup("<h1>" + v[0] + " (" + v[2] + ")</h1><h3>" + v[3] + "</h3><h2>" + v[1] + " Mètres</h2><h3>" + v[4] + "</h3> <a id=\"imgRsk\" href=\"\" " + linkString + "><img  id='imgPop'  src='../asset/img/IMG_PINGO/" + v[7] + "'/> </a><button type='button' id='rskBtn' data-code=" + count + " onclick='change(" + k + ")'>Risques</button>");
        count++;

        //Zoom quand on clique sur le marqueur.
        window['marker' + k].on('click', function () {
             map.setView([v[5],v[6]], 10); 
        });
    });
}

let modePoly = false;

function change(key) {

    index = key;


    //On envoie un tableau de tableau à leaflet pour afficher les polygones
    let ltlg = JSON.parse(tabData[index][8]);

    let imgSwicth1 = tabData[index][7];
    let imgSwicth2 = tabData[index][9];
    let link = tabData[index][10];

    //On Récupère l'image
    let img = document.getElementById('imgPop');
    let imgR = document.getElementById('imgRsk');

    if (link == "#") {
        imgR.setAttribute("target", "_self");
        imgR.href = "#";
    } else {
        imgR.setAttribute("target", "_blank");
        imgR.href = link;
    }

    if (modePoly) {
        map.removeLayer(poly);
        img.src = '../asset/img/IMG_PINGO/' + imgSwicth1;
        modePoly = false;
        imgR.href = "#";
    } else {
        modePoly = true;
        poly = L.polygon(ltlg, { color: 'rgba(56, 210, 173, 0.47)' }).addTo(map);
        img.src = '../asset/img/IMG_PINGO/' + imgSwicth2;

    }
    map.on('click', removePoly);
}

function removePoly() {

    map.removeLayer(poly);

}




    

    



    
   




