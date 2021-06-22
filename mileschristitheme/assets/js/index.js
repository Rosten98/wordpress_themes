console.log("Hola mundo")
function openNav() {
  document.querySelector("#menu").style.visibility = "visible";
  document.querySelector("#menu").style.opacity = 1;
  document.querySelector("#menu-close").style.visibility = "visible";
  document.querySelector("#menu-close").style.opacity = 1;
}

function closeNav() {
  document.querySelector("#menu").style.opacity = 0;
  document.querySelector("#menu-close").style.opacity = 0;
  setTimeout(() => {
    document.querySelector("#menu").style.visibility = "hidden";
    document.querySelector("#menu-close").style.visibility = "hidden";
  }, 250);
}