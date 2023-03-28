let logo = document.querySelector("#logo");
let isAnimated = false;
document.querySelector('.rythm-bar-1').style.height = "0";
let firstBar = document.querySelector('.rythm-bar-1').style.height;
document.querySelector('.rythm-bar-2').style.height = "0";
let secondBar = document.querySelector('.rythm-bar-2').style.height;
document.querySelector('.rythm-bar-3').style.height = "0";
let thirdBar = document.querySelector('.rythm-bar-3').style.height;
document.querySelector('.rythm-bar-4').style.height = "0";
let fourthBar = document.querySelector('.rythm-bar-4').style.height;
document.querySelector('.rythm-bar-5').style.height = "0";
let fifthBar = document.querySelector('.rythm-bar-5').style.height;
let tempo = getRandomArbitrary(150, 300)

logo.addEventListener('mouseover', function () {
    isAnimated = true;
    
});
logo.addEventListener('mouseout', function () {
    isAnimated = false;
});



function animateBars(){

    if (isAnimated) {
        if (firstBar == "0px") {
            firstBar = parseInt(getRandomArbitrary(50, 200)).toString() + "px";
            document.querySelector('.rythm-bar-1').style.height = firstBar;
            document.querySelector('.rythm-bar-10').style.height = firstBar;
            secondBar = parseInt(getRandomArbitrary(100, 250)).toString() + "px";
            document.querySelector('.rythm-bar-2').style.height = secondBar;
            document.querySelector('.rythm-bar-9').style.height = secondBar;
            thirdBar = parseInt(getRandomArbitrary(150, 300)).toString() + "px";
            document.querySelector('.rythm-bar-3').style.height = thirdBar;
            document.querySelector('.rythm-bar-8').style.height = thirdBar;
            fourthBar = parseInt(getRandomArbitrary(100, 250)).toString() + "px";
            document.querySelector('.rythm-bar-4').style.height = fourthBar;
            document.querySelector('.rythm-bar-7').style.height = fourthBar;
            fifthBar = parseInt(getRandomArbitrary(50, 200)).toString() + "px";
            document.querySelector('.rythm-bar-5').style.height = fifthBar;
            document.querySelector('.rythm-bar-6').style.height = fifthBar;

        }
        else {
            firstBar = "0px";
            document.querySelector('.rythm-bar-1').style.height = firstBar;
            document.querySelector('.rythm-bar-10').style.height = firstBar;
            secondBar = "0px";
            document.querySelector('.rythm-bar-2').style.height = secondBar
            document.querySelector('.rythm-bar-9').style.height = secondBar;
            thirdBar = "0px";
            document.querySelector('.rythm-bar-3').style.height = thirdBar;
            document.querySelector('.rythm-bar-8').style.height = thirdBar;
            fourthBar = "0px";
            document.querySelector('.rythm-bar-4').style.height = fourthBar;
            document.querySelector('.rythm-bar-7').style.height = fourthBar;
            fifthBar = "0px";
            document.querySelector('.rythm-bar-5').style.height = fifthBar;
            document.querySelector('.rythm-bar-6').style.height = fifthBar;
        }
    }


    clearInterval(timer);
    timer = setInterval(animateBars,parseInt(getRandomArbitrary(80,250)))
}

    
    
    
let timer = setInterval(animateBars,150);









function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}