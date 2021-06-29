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