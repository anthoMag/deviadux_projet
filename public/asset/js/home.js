/* ---------Anim SVG----------- */
document.addEventListener('DOMContentLoaded', (e)=>{

    let prevTime = 0;
    let prevTime2 = 0;
    document.addEventListener('scroll', (e) => {

        let image = document.getElementById('img-anim-hexa');
        let rect = image.getBoundingClientRect();

        if(rect.y < window.innerHeight-rect.height && rect.y > 1) {
            let delay = image.dataset['delay'];
            let now = Date.now();
            let ecoule = now - prevTime;

            if (ecoule > (delay*1000)) {
                image.src = "./logopictoicone/hexaanimate.svg";
                prevTime = now;
            }
        }

        image = document.getElementById('img-anim-pluie');
        rect = image.getBoundingClientRect();

        if(rect.y < window.innerHeight-rect.height && rect.y > 1) {
            let delay = image.dataset['delay'];
            let now = Date.now();
            let ecoule = now - prevTime2;

            if (ecoule > (delay*1000)) {
                image.src = "./logopictoicone/pluieanimate.svg";
                prevTime2 = now;
            }
        }
    })
})

/* ----------------------COOKIE BAR--------------------- */
let closeBtn = document.getElementById('closeCookie');



function close(){
    
    let cookieBar = document.getElementById('cookiesBar');
    
    cookieBar.style.display='none';
    
}

closeBtn.addEventListener('click',close);
/* ---------------------------modal------------------------------------- */

// var modal = document.querySelector(".modal");
// var trigger = document.querySelector(".example");
// var closeButton = document.querySelector(".close-button");

// function toggleModal() {
//   modal.classList.toggle("show-modal");
//   el = document.getElementById("example");
//   el.style.visibility = el.style.visibility == "visible" ? "hidden" : "visible";
// }

// function windowOnClick(event) {
//   if (event.target === modal) {
//     toggleModal();
//   }
// }


// trigger.addEventListener("click", toggleModal);
// closeButton.addEventListener("click", toggleModal);
// window.addEventListener("click", windowOnClick);
