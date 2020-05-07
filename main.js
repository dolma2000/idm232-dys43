

    // HAMBURGER ICON ANIMATION
  const hamburger = document.querySelector(".hamburger");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    hamburger.classList.toggle("slide");
    // Do something else, like open/close menu
  });

  // MENU SLIDE IN 
  const navSlide = () => {

    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector('.nav-links');
    
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('nav-active')
    });
    }
    
    navSlide();

 

  const expcol = document.getElementById('exp-col');
  const expand = document.getElementById('exp');
  const collapse = document.getElementById('col');

  

  var inside = document.getElementsByClassName("inside");
  var i;
  for (i = 0; i < inside.length; i++) {
    inside[i].style.display = "none";
  } 

  collapse.hidden=true;
  expand.hidden=false;

  expand.addEventListener('click', () => {
    expand.hidden=true;
    collapse.hidden=false;
    for (i = 0; i < inside.length; i++) {
      inside[i].style.display = "block";
    } 
  })
  collapse.addEventListener('click', () => {
    expand.hidden=false;
    collapse.hidden=true;
    for (i = 0; i < inside.length; i++) {
      inside[i].style.display = "none";
    }
  })