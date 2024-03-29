//On Sélectionne les sliders
let sliders = document.querySelectorAll('.slider');

//Pour chaque Sliders on modifie l'effet avant/après avec le curseur
sliders.forEach(function (slider) {
    let sliderRange = slider.querySelector('.slider__range');
    let sliderBefore = slider.querySelector('.slider__before');
    let sliderSeparator = slider.querySelector('.slider__separator');


    function updapteSliderPosition() {

        sliderBefore.style = `width:${sliderRange.value}%`;
        sliderSeparator.style = `left:${sliderRange.value}%`;

    }

   //Quand on clique sur l'input on déplace le curseur
    sliderRange.addEventListener('input', updapteSliderPosition);

    let isDragging = false;

    //Quand la pression du clique est enclanché on déplace le curseur
    sliderSeparator.addEventListener('mousedown', function () {
        isDragging = true;
    });

    //Quand on relâche la pression on arrête de bouger le curseur
    document.addEventListener('mouseup', function () {
        isDragging = false;
    });

    // Si on est en clique sur le curseur on peux glisser le slider
    document.addEventListener('mousemove', function (e) {
        if (isDragging) {
            let sliderRect = slider.getBoundingClientRect()
            //Récupère la postion x de la souris et je soustrait la largeur du rectangle
            let newWidth = (e.clientX - sliderRect.left) / sliderRect.width * 100;
            sliderRange.value = newWidth;
            updapteSliderPosition();
        }
    });
});