/**
 * Created by bchang1991 on 8/20/16.
 */
// Slideshow script
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demodots");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-white";
}


// Autorotate
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demodots");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-white";
    setTimeout(carousel, 5000); // Change image every 5 seconds
}

// Slideshow script 2
var slideIndex2 = 1;
showDivs2(slideIndex2);

function plusDivs2(n) {
    showDivs2(slideIndex2 += n);
}

function currentDiv2(n) {
    showDivs2(slideIndex2 = n);
}

function showDivs2(n) {
    var i;
    var x = document.getElementsByClassName("mySlides2");
    var dots = document.getElementsByClassName("demodots2");
    if (n > x.length) {slideIndex2 = 1}
    if (n < 1) {slideIndex2 = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex2-1].style.display = "block";
    dots[slideIndex2-1].className += " w3-white";
}


// Autorotate
var slideIndex2 = 0;
carousel2();

function carousel2() {
    var i;
    var x = document.getElementsByClassName("mySlides2");
    var dots = document.getElementsByClassName("demodots2");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    slideIndex2++;
    if (slideIndex2 > x.length) {slideIndex2 = 1}
    x[slideIndex2-1].style.display = "block";
    dots[slideIndex2-1].className += " w3-white";
    setTimeout(carousel2, 5000); // Change image every 5 seconds
}

// Slideshow script 3
var slideIndex3 = 1;
showDivs3(slideIndex3);

function plusDivs3(n) {
    showDivs3(slideIndex3 += n);
}

function currentDiv3(n) {
    showDivs3(slideIndex3 = n);
}

function showDivs3(n) {
    var i;
    var x = document.getElementsByClassName("mySlides3");
    var dots = document.getElementsByClassName("demodots3");
    if (n > x.length) {slideIndex3 = 1}
    if (n < 1) {slideIndex3 = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex3-1].style.display = "block";
    dots[slideIndex3-1].className += " w3-white";
}


// Autorotate
var slideIndex3 = 0;
carousel3();

function carousel3() {
    var i;
    var x = document.getElementsByClassName("mySlides3");
    var dots = document.getElementsByClassName("demodots3");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    slideIndex3++;
    if (slideIndex3 > x.length) {slideIndex3 = 1}
    x[slideIndex3-1].style.display = "block";
    dots[slideIndex3-1].className += " w3-white";
    setTimeout(carousel3, 5000); // Change image every 5 seconds
}
