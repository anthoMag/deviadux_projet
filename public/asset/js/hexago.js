// Récupère la hauteur de la balise html
let htmlHeight = document.querySelector('html').offsetHeight;

// DOM de la map
let mappy = document.getElementById('map');

// Récupère la div qui contient le logo qui va servir d'icone de chargement
logo = document.querySelector('.logo');

// Modifie la hauteur de la div qui contient la carte
mappy.style.height = htmlHeight - 200 + 'px'; 



/////// RANGE  K////////

// Récupère la balise h2 qui affiche l'altitude de l'océan
let meter = document.getElementById('metre');

// Récupère la balise h2 qui affiche l'année actuelle
let old = document.getElementById('old');

// Récupère la balise span qui contient la valeur du curseur
const sliderValue = document.querySelector("span");

// Récupère la balise input du curseur
const inputSlider = document.querySelector("input");

// Déclare une élévation par défaut au chargement de la page
let elevation = 0;

// Lance le code ci-dessous si il y a une interaction en cours avec le curseur
inputSlider.oninput = (() => {

    // Récupère la valeur du curseur
    let value = inputSlider.value;

    // Permet de calculer l'année choisie
    year = 2000 + parseInt(value * 5);

    // Permet de mettre à jour l'année choisie au dessus du curseur
    sliderValue.textContent = year;

    // Permet de déplacer l'année au dessus du curseur
    sliderValue.style.left = value + "%";

    // Permet d'afficher l'année au dessus du curseur
    sliderValue.classList.add("show");

    // Algorithme pour calculer la hauteur de l'océan en fonction de l'année
    // Algorithme créé à partir des recherches effectuées sur internet
    num = (year - 2000) * 0.0055;
    reg = 0.26 * num;
    exp = Math.exp(num);
    result = ((reg + exp) - 1);
    //formate le nombre  obtenue en notation à point-fixe.
    elevation = result.toFixed(2);

    // Permet de mettre à jour l'affichage de la hauteur de l'océan
    meter.innerHTML = elevation;

    // Permet de mettre à jour l'affichage de l'année choisie
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

        // Stoppe les appels vers l'API
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

        // Permet d'identifier l'appel actuel pour pouvoir la stopper
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

        // Permet de prévoir à l'avance le nombre de points à envoyer à l'API
        let pointsPreShot = (divX * divY) + divX + divY + 1;

        // Calcul pour connaître le nombre d'appels nécessaires en fonction du nombre de points dans la grille
        // (Erreur si je dépasse les 1000 requêtes par appel, donc je choisi 900 max pour ne pas créer d'erreur)
        let requestNeed = Math.ceil(pointsPreShot / 900);

        // Permet de calculer le nombre de points pour chaque tableau de tableau
        let gridPointsDivision = Math.ceil(pointsPreShot / requestNeed);

        // Déclare un tableau qui rangera toutes les coordonnées de la grille
        let gridPoints = [];

        // Déclare un tableau qui permettra d'alimenter le tableau 'gridPoints'
        let points = [];

        // Push toutes les longitudes et latitudes dans le tableau 'gridPoints'
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

        // Déclare un tableau qui va acceuillir touts les coordonnés des points d'eaux
        let waterPoints = [];

        // Déclare une variable qui va servir de compteur
        // et qui va cibler un index de tableau dans le tableau 'gridPoints'
        let counter = 0;

        // Lance la fonction getElevation sans délai si aucun appel est actuellement en cours
        if (counterAppel == 0) {
            getElevation(counter);
        }

        // Lance la fonction getElevation avec un délai de 200ms si un appel est en cours
        // (l'ajout d'un délai permet d'éviter le bug 'too many request' avec l'API)
        if (counterAppel >= 1) {
            setTimeout(getElevation, 200, counter);
        }

        // Déclaration de la fonction asynchrone qui va intéroger l'API
        async function getElevation(counter) {

            // Try permet d'exécuter le code sous la réponse (si il y a une réponse)
            try {
                // API Open Elevation:
                // https://api.open-elevation.com/api/v1/lookup

                // API Open Elevation hebergé par le serveur de Benoît:
                // http://51.210.126.117/api/v1/lookup

                const rawResponse = await fetch('http://51.210.126.117/api/v1/lookup', {
                    method: 'POST',
                    signal: signal,
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ 'locations': gridPoints[counter] })
                });
                const responseApi = await rawResponse.json();

                // Boucle qui va permettre de push dans le tableau 'waterPoints'
                // les coordonnées qui sont inférieures ou égales à l'élévation demandée par l'utilisateur
                for (let i = 0; i < responseApi.results.length; i++) {

                    if (responseApi.results[i].elevation <= elevation) {
                        waterPoints.push([responseApi.results[i].latitude, responseApi.results[i].longitude, 200]);
                    }
                }

                // Si tout les appels sont terminés, lance le code ci-dessous
                if (counter == requestNeed - 1) {

                    // Créer un groupe 'Layer' leaflet
                    let group = L.featureGroup();

                    // Push toutes les points d'eau du tableau 'waterPoints' dans un groupe nommé 'group'
                    var heat = L.heatLayer(waterPoints, { radius: 15 }).addTo(group);

                    // Affiche tout les points d'eau sur la carte
                    map.addLayer(group);

                    // Supprime le logo de chargement
                    logo.classList.remove('display_block');

                    // défini qu'il n'y a aucun appel vers l'API en cours
                    counterAppel = 0;

                    // Lance la fonction lors de l'évênement 'movestart'
                    map.on('movestart', gridRemove);

                    // Lance la fonction lors de l'évênement 'mousedown' sur le curseur
                    inputSlider.addEventListener('mousedown', gridRemove);

                    // Déclaration de la fonction pour retirer les points de la grille
                    function gridRemove() {

                        // Retire les points de la grille
                        map.removeLayer(group);

                        // Permet de sortir de la fonction
                        return;
                    }
                }

                // Ajouter +1 au compteur
                counter++;

                // Si le compteur n'est pas égal au nombre de requête nécessaire, lance la fonction getElevation
                if (counter != requestNeed) {
                    setTimeout(getElevation, 200, counter);
                }

                // Si le compteur est égal à 1, affiche le logo de chargement
                if (counter == 1) {
                    logo.classList.add('display_block');
                }

            // catch permet d'exécuter le code ci-dessous (si il n'y a pas de réponse, ou s'il y a intérruption volontaire de la réponse)
            } catch (error) {

                // Redéfini le compteur à 0 pour relancer les requêtes depuis le premier tableau de coordonnées
                counter = 0;

                // Permet de relancer la fonction gridAdd si l'API renvoie une erreur suite à l'appel 
                // Lorsque que l'on stoppe volontairement une requête, le code d'erreur est 20.
                // (ce qui permet de ne pas relancer la fonction gridAdd si c'est le cas)
                if (error.code != 20) {

                    setTimeout(gridAdd, 200);
                }

                // Permet de sortir de 'catch'
                return;
            }
        }
    }
}