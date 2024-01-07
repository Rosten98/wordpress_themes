console.log("Hola mundo")
function openNav() {
  var menu = document.querySelectorAll("#menu");
  menu.forEach(menuItem => {
    menuItem.style.visibility = "visible";
    menuItem.style.opacity = 1;
    
  });
  document.querySelector("#menu-close").style.visibility = "visible";
  document.querySelector("#menu-close").style.opacity = 1;
}

function closeNav() {
  var menu = document.querySelectorAll("#menu");
  menu.forEach(menuItem => {
    menuItem.style.opacity = 0;
  });
  document.querySelector("#menu-close").style.opacity = 0;
  
  setTimeout(() => {
    menu.forEach(menuItem => {
      menuItem.style.visibility = "hidden";
    });
    document.querySelector("#menu-close").style.visibility = "hidden";
  }, 250);
}


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}