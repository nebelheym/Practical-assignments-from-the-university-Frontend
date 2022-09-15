const startBtn = document.querySelector(".startBtn");
const stopBtn = document.querySelector(".stopBtn");
let nch = false;

function chancheBF() {
    const imgVal = document.getElementById('newImg');
    console.log(imgVal.getAttribute('src'));
    if (!nch) {
        setTimeout(function () { imgVal.setAttribute('src', "twoWing.png"); }, 500);
        nch = true;
    } else {
        setTimeout(function () { imgVal.setAttribute('src', "oneWing.png"); }, 500);
        nch = false;
    }
}

startBtn.addEventListener("click", function () {
    intervalID = setInterval(chancheBF, 500);
});

stopBtn.addEventListener("click", function () {
    clearInterval(intervalID);
});


