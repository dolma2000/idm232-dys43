
  // // Look for .hamburger
  // var hamburger = document.querySelector(".hamburger");
  // // On click
  // hamburger.addEventListener("click", function() {
  //   // Toggle class "is-active"
  //   hamburger.classList.toggle("nav-active");
  //   // Do something else, like open/close menu
  //   });

    const navSlide = () => {

      const burger = document.querySelector('.burger');
      const nav = document.querySelector('.nav-links');
      
      burger.addEventListener('click', () => {
          nav.classList.toggle('nav-active')
      });
      }
      
      navSlide();

  const expcol = document.getElementById('exp-col');
  const expand = document.getElementById('exp');
  const collapse = document.getElementById('col');

  // const inside=document.querySelectorAll('.inside');
  // inside[0].style.display='none';

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