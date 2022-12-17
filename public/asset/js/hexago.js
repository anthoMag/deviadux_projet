/*
 (c) 2014, Vladimir Agafonkin
 simpleheat, a tiny JavaScript library for drawing heatmaps with Canvas
 https://github.com/mourner/simpleheat
*/

/////// TAILLE DE LA CARTE ///////

// Récupère la hauteur de la balise html
let htmlHeight = document.querySelector('html').offsetHeight;

// DOM de la map
let mappy = document.getElementById('map');

// Modifie la hauteur de la map
mappy.style.height = htmlHeight - 200 + 'px';

/////// RANGE ////////

let meter = document.getElementById('metre');
let old = document.getElementById('old');

const sliderValue = document.querySelector("span");
const inputSlider = document.querySelector("input");

let elevation = 0;

inputSlider.oninput = (() =>{
    let value = inputSlider.value;
    
    year = 2000 + parseInt(value * 5); 

    sliderValue.textContent = year; 
    sliderValue.style.left = value + "%";
    sliderValue.classList.add("show");

    num = (year - 2000) * 0.0055;
    reg = 0.26 * num;
    exp = Math.exp(num);

    result = ((reg + exp) - 1);
    elevation = result.toFixed(2); 

   meter.innerHTML=elevation; 
   old.innerHTML=year; 
})


/////// MAP ///////

// Test polygones
let geojsonReg = null;
let geojsonDep = null;

// Dimension de la map
let width = 1920;
let height = 675;

let divisionX =  120;

let request = 5;
let counterRequest = 0;

launchMap();

// Déclaration de la fonction qui lance la map
function launchMap(){

    // Point de spawn de la map au lancement de la page
    var map = L.map('map').setView([46, 3.161405], 5);

    // Déclare la map
    L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        className: 'map-tiles',
        minZoom: 5,
        maxZoom: 15
    
    // Affiche la map
    }).addTo(map);

    // Appel de la fonction gridAdd
    gridAdd();

    // Lance la fonction gridAdd lors de l'évênement 'moveend'
    map.on('moveend', gridAdd);
    inputSlider.addEventListener('mouseup', gridAdd);

    var controller = null;
    var signal = null;

    // Déclaration de la fonction pour afficher la grille heatMap
    function gridAdd(){

        if (counterRequest == 1) {
            if (controller != null) {
                controller.abort();
            }         
        }

        controller = new AbortController();
        signal = controller.signal;

        counterRequest = 1;
        
        // Récupère les coordonnées nord-est et sud-ouest de la carte visible
        let boundsMap = map.getBounds();

        // Récupère les coordonnées nord-est
        let x1 = boundsMap['_northEast']['lng']; 
        let y1 = boundsMap['_northEast']['lat'];
        
        // Récupère les coordonnées sud-ouest
        let x2 = boundsMap['_southWest']['lng'];
        let y2 = boundsMap['_southWest']['lat'];

        // Récupère la différence entre les 2 coordonnées
        let x3 = x1 - x2;
        let y3 = y1 - y2;

        // Calcule le nombre de points intermédiaires par rapport à la dimension de la page (width)
        let divisionY = Math.floor(height * divisionX / width);

        // Calcule la distance entre 2 points de la grille
        let x4 = x3 / divisionX;
        let y4 = y3 / divisionY;

        // Déclare 2 tableaux (lng: toutes les longitudes, lat: toutes les latitudes)
        let lng = [];
        let lat = [];

        // Push toutes les longitudes
        for (let i = 0; i <= divisionX; i++){
            lng.push(x2 + (x4 * i));
        }

        // Push toutes les latitudes
        for (let i = 0; i <= divisionY; i++){
            lat.push(y2 + (y4 * i));
        }
 
        let pointsPreShot = (divisionX * divisionY) + divisionX + divisionY + 1;

        let gridPointsDivision = Math.ceil(pointsPreShot / request);

        // Déclare un tableau qui rangera toutes les coordonnées de la grille
        let gridPoints = [];
        let points = [];

        // Push toutes les longitudes et latitudes dans le tableau 'gridPoints
        for (let j = 0; j < lat.length; j++) {      
            for (let i = 0; i < lng.length; i++) {

                if (points.length == gridPointsDivision){
                    gridPoints.push(points);
                    points = [];
                }

                points.push({
                    latitude: lat[j],
                    longitude: lng[i]
                });
            }   
        }

        gridPoints.push(points);

        let waterPoints = [];
  
        let counter = 0;

        if (counterRequest == 0) {
            getElevation(counter);
        }

        if (counterRequest >= 1) {
            setTimeout(getElevation, 200, counter);
        }
        


        logo = document.querySelector('.logo');
        let move = 0;
        logoMove(move);


        function logoMove(move) {
            if (move == 0) {
                logo.classList.add('display_block');
            }

            if (move == 1) {
                logo.classList.remove('display_block');
            }
        }


        async function getElevation(counter){

            try {

                // ICI code la requete    
                const rawResponse = await fetch('https://api.open-elevation.com/api/v1/lookup', {
                method: 'POST',
                signal: signal,
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({'locations': gridPoints[counter]})
                });
                const responseApi = await rawResponse.json();        

                for (let i = 0; i < responseApi.results.length; i++) {
                    
                    if (responseApi.results[i].elevation <= elevation) {
                        waterPoints.push([responseApi.results[i].latitude, responseApi.results[i].longitude, 200]);
                    }  
                }

                console.log(waterPoints);

                if (counter == 4) {

                    // Créer un groupe 'Layer' leaflet
                    let group = L.featureGroup(); 

                    // Push toutes les points de la grille dans un groupe 'group'
                    var heat = L.heatLayer(waterPoints, {radius: 15}).addTo(group);

                    gridRemove();

                    // Affiche tout les points de la grille
                    map.addLayer(group);

                    counterRequest = 0;

                    // Lance la fonction lors de l'évênement 'movestart'
                    map.on('movestart', gridRemove);
                    inputSlider.addEventListener('mousedown', gridRemove);

                    // Déclaration de la fonction pour retirer les points de la grille
                    function gridRemove(){

                    // Retire les points de la grille
                    map.removeLayer(group);

                    return;

                    }
                }

                counter ++;


                if (counter != 5) {
                    setTimeout(getElevation, 200, counter);
                }
                
            } catch(error) {
                // EN CAS DE FAIL
           
                counter = 0;
            
                return;

            }
        }
    } 
}