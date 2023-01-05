//On Sélectionen les sliders
let sliders = document.querySelectorAll('.slider');

//Pour chaque Sliders on modifie les photos avec le curseur
sliders.forEach(function (slider) {
    let sliderRange = slider.querySelector('.slider__range');
    let sliderBefore = slider.querySelector('.slider__before');
    let sliderSeparator = slider.querySelector('.slider__separator');

    function updapteSliderPosition() {

        sliderBefore.style = `width:${sliderRange.value}%`;
        sliderSeparator.style = `left:${sliderRange.value}%`;

    }
  
    sliderRange.addEventListener('input', updapteSliderPosition);

    let isDragging = false;

    sliderSeparator.addEventListener('mousedown', function () {
        isDragging = true;

    });
    document.addEventListener('mouseup', function () {
        isDragging = false;

    });
    document.addEventListener('mousemove', function (e) {
        if (isDragging) {
            let sliderRect = slider.getBoundingClientRect()
            let newWidth = (e.clientX - sliderRect.left) /
                sliderRect.width * 100;
            sliderRange.value = newWidth;
            updapteSliderPosition();
        }
    });
});