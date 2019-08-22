"use strict";

/*******************
 * Slide functionality 
 *    --adapted from w3schools
 *******************/
var slideIndex = 1;

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
document.addEventListener("DOMContentLoaded", function(event) { 
   showSlides(slideIndex);
});
/**********************
 * Show Recaptcha Badge when user scrolls to contact form
 **********************/
document.addEventListener("scroll", event => { 
    const captchaBadge = document.querySelector('.grecaptcha-badge');
    if (captchaBadge) {
      if (window.scrollY>3800 && window.scrollY<4850) {
        captchaBadge.style.webkitTransform = "translateX(0)";
      }else{
        captchaBadge.style.webkitTransform = "translateX(200%)";
      }
    }   
});

