// Récupère la hauteur de la balise html
let htmlHeight = document.querySelector('html').offsetHeight;

// DOM de la map
let mappy = document.getElementById('map');

// Récupère la div qui contient le logo qui va servir d'icone de chargement
logo = document.querySelector('.logo');

// Modifie la hauteur de la div qui contient la carte
mappy.style.height = htmlHeight - 200 + 'px';



/////// RANGE ////////

// Récupère la balise h2 qui affiche l'altitude de l'océan
let meter = document.getElementById('metre');

// Récupère la balise h2 qui affiche l'année actuelle
let old = document.getElementById('old');

const sliderValue = document.querySelector("span");
const inputSlider = document.querySelector("input");

let elevation = 0;

inputSlider.oninput = (() => {
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

    meter.innerHTML = elevation;
    old.innerHTML = year;
})



/////// CARTE ///////

// Déclaration de la variable qui indique si un appel vers l'API est en cours (1:oui / 0:non)
let counterAppel = 0;

// Appel la fonction launchMap() au chargement de la page
launchMap();

// Déclaration de la fonction qui affiche la carte
function launchMap() {

    // Défini le point d'arrivé sur la carte au chargement de la page
    var map = L.map('map').setView([46, 3.161405], 5);

    // Déclaration de la carte
    L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        className: 'map-tiles',
        minZoom: 5,
        maxZoom: 15

        // Affiche la map
    }).addTo(map);

    // Appel de la fonction gridAdd() au chargement de la page
    gridAdd();

    // Lance la fonction gridAdd lors de l'évênement 'moveend' sur la carte / 'mouseup' sur le slider
    map.on('moveend', gridAdd);
    inputSlider.addEventListener('mouseup', gridAdd);

    var controller = null;
    var signal = null;

    // Déclaration de la fonction qui va stopper les appels vers l'API
    function stopAppel() {

        // Stoppe les appel vers l'API
        controller.abort();

        // Fait disparaître le logo de chargement
        logo.classList.remove('display_block');
    }

    // Déclaration de la fonction pour afficher la grille de points d'eaux
    function gridAdd() {

        // Condition si un appel est en cours
        if (counterAppel == 1) {

            // Condition si la variable controller n'est pas égal à 'null'
            if (controller != null) {

                // Appel de la fonction pour stopper les appels vers l'API
                stopAppel();
            }

            //// Stoppe les appels vers l'API si il y a event: ////

            // 'mousedown' sur le slider
            inputSlider.addEventListener('mousedown', stopAppel);

            // 'mousedown' sur la carte
            map.on('mousedown', stopAppel);

            // 'movestart' sur la carte
            map.on('movestart', stopAppel);
        }

        controller = new AbortController();
        signal = controller.signal;

        // Indique qu'il y a un appel vers l'API en cours
        counterAppel = 1;

        // Récupère la largeur de la div qui contient la carte
        let mappyWidth = document.getElementById('map').offsetWidth;

        // Récupère la hauteur de la div qui contient la carte
        let mappyHeight = document.getElementById('map').offsetHeight;

        // Calcul pour connaître le nombre de points en largeur sur la grille (chacun séparé d'environ 15px)
        divX = Math.floor(mappyWidth / 15);

        // Calcul pour connaître le nombre de points en hauteur sur la grille (chacun séparé d'environ 15px)
        divY = Math.floor(mappyHeight / 15);

        // Calcul pour connaître le nombre de points dans la grille
        let resultXY = divX * divY;

        // Calcul pour connaître le nombre d'appels nécessaires en fonction du nombre de points dans la grille
        // (Erreur si je dépasse les 1000 requêtes par appel, donc je choisi 900 max pour ne pas créer d'erreur)
        let requestNeed = Math.ceil(resultXY / 900);

        // Récupère les coordonnées nord-est et sud-ouest de la carte visible
        let boundsMap = map.getBounds();

        // Récupères les coordonnées nord-est
        let x1 = boundsMap['_northEast']['lng'];
        let y1 = boundsMap['_northEast']['lat'];

        // Récupères les coordonnées sud-ouest
        let x2 = boundsMap['_southWest']['lng'];
        let y2 = boundsMap['_southWest']['lat'];

        // Récupère la différence entre les 2 coordonnées
        let x3 = x1 - x2;
        let y3 = y1 - y2;

        // Calcule la distance entre 2 points de la grille
        let x4 = x3 / divX;
        let y4 = y3 / divY;

        // Déclare 2 tableaux (lng: toutes les longitudes, lat: toutes les latitudes)
        let lng = [];
        let lat = [];

        // Push toutes les longitudes
        for (let i = 0; i <= divX; i++) {
            lng.push(x2 + (x4 * i));
        }

        // Push toutes les latitudes
        for (let i = 0; i <= divY; i++) {
            lat.push(y2 + (y4 * i));
        }

        let pointsPreShot = (divX * divY) + divX + divY + 1;

        let gridPointsDivision = Math.ceil(pointsPreShot / requestNeed);

        // Déclare un tableau qui rangera toutes les coordonnées de la grille
        let gridPoints = [];
        let points = [];

        // Push toutes les longitudes et latitudes dans le tableau 'gridPoints
        for (let j = 0; j < lat.length; j++) {
            for (let i = 0; i < lng.length; i++) {

                if (points.length == gridPointsDivision) {
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

        console.log(gridPoints);

        let waterPoints = [];

        let counter = 0;

        if (counterAppel == 0) {
            getElevation(counter);
        }

        if (counterAppel >= 1) {
            setTimeout(getElevation, 200, counter);
        }

        async function getElevation(counter) {

            try {
                // API Open Elevation:
                // https://api.open-elevation.com/api/v1/lookup

                // API Open Elevation hebergé par le serveur de Benoît:
                // http://51.210.126.117/api/v1/lookup

                const rawResponse = await fetch('https://api.open-elevation.com/api/v1/lookup', {
                    method: 'POST',
                    signal: signal,
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ 'locations': gridPoints[counter] })
                });
                const responseApi = await rawResponse.json();

                for (let i = 0; i < responseApi.results.length; i++) {

                    if (responseApi.results[i].elevation <= elevation) {
                        waterPoints.push([responseApi.results[i].latitude, responseApi.results[i].longitude, 200]);
                    }
                }

                if (counter == requestNeed - 1) {

                    // Créer un groupe 'Layer' leaflet
                    let group = L.featureGroup();

                    // Push toutes les points de la grille dans un groupe 'group'
                    var heat = L.heatLayer(waterPoints, { radius: 15 }).addTo(group);

                    gridRemove();

                    // Affiche tout les points de la grille
                    map.addLayer(group);

                    loading = 0;
                    logo.classList.remove('display_block');

                    counterAppel = 0;

                    // Lance la fonction lors de l'évênement 'movestart'
                    map.on('movestart', gridRemove);
                    inputSlider.addEventListener('mousedown', gridRemove);

                    // Déclaration de la fonction pour retirer les points de la grille
                    function gridRemove() {

                        // Retire les points de la grille
                        map.removeLayer(group);

                        return;

                    }
                }

                counter++;


                if (counter != requestNeed) {
                    setTimeout(getElevation, 200, counter);
                }

                if (counter == 1) {
                    logo.classList.add('display_block');
                }

            } catch (error) {
                // EN CAS DE FAIL

                counter = 0;

                if (error.code != 20) {

                    setTimeout(gridAdd, 200);
                }

                return;

            }
        }
    }
}