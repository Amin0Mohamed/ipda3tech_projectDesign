//***************start slick arrow*******************************
$(document).ready(function(){
    $('.single').slick({
        draggable: true,
        autoplay: false, /* this is the new line */
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        touchThreshold: 1000,
        prevArrow: '.pre',
        nextArrow: '.nex'
    });
    $('.single-item').slick({
        draggable: true,
        autoplay: true, /* this is the new line */
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        touchThreshold: 1000,
        prevArrow: '.prev',
        nextArrow: '.next'
    });
});
//***************end slick arrow*******************************

//***************start loading page*******************************
function load() {
    var load = document.getElementById("load");
    load.style.visibility = "hidden";
    // alert("hidden")
}
//***************end loading page*******************************

//***************start scroll up*******************************
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//***************end scroll up*******************************

//***************start nav scroll*******************************
window.onscroll = function() {scroll_nave()};

function scroll_nave() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("nav").style.opacity=0.5;
    } else {
        document.getElementById("nav").style.opacity=1;
    }
}
//***************end nav scroll*******************************


