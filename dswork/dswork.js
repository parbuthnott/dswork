n = (document.layers) ? 1 : 0;
n6 = (parseInt(navigator.appVersion) >= 5) ? 1 : 0;
ie = (document.all) ? 1 : 0;

function openWin(url, winName) {
    var isOpen;
    isOpen = window.open(url, winName, 'scrollbars=yes,toolbar=no,location=no,status=no,menubar=no,resizable=no,width=800,height=600');
    isOpen.focus();
}

function externalLinks() {
    if (arguments.callee.done) return;
    arguments.callee.done = true;
    var anchors = document.getElementsByTagName("a");
    for (var i = 0; i < anchors.length; i++) {
        var anchor = anchors[i];
        if (anchor.getAttribute("href") && anchor.getAttribute("class") === "external") {
            anchor.target = "_blank";
            anchor.onclick = "openWin('" + anchor.getAttribute("href") + "','newwindow');return false";
            anchor.title = "Opens in a new window...";
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector('.prev').addEventListener('click', function (e) {
        plusSlides(-1);
        e.preventDefault();
    }, false);
    document.querySelector('.next').addEventListener('click', function (e) {
        plusSlides(1);
        e.preventDefault();
    }, false);
    showSlides(slideIndex);
});
var slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}