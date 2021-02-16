const header = document.querySelector('header');
const toTop = document.getElementById('back-to-top');
const buttonMobile = document.getElementById('mobileButton');
const nav = document.querySelector('nav');
const links = document.querySelectorAll('nav ul li a');


window.onscroll = function() {
  headerFunction();
  backtoTop();
}

/* function headerFunction() {
  if (document.body.scrollTop > 100 || 
    document.documentElement.scrollTop > 100) {
      header.style.backgroundColor = "#2424248c";
      header.style.color = "#fff";
  } else {
    header.style.backgroundColor = "transparent";
    header.style.color = "#000";
    header.style.padding = "2rem";
  }
} */

const headerFunction = () => {
  if (document.body.scrollTop > 100 || 
    document.documentElement.scrollTop > 100) {
      header.classList.add("bg");
  } else {
    header.classList.remove("bg");
  }
}

const backToTop = () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
const mobMenu = () => {
  nav.classList.toggle('responsive');
  //for (let i = 0; i < links.length; i++) {
    //nav.addEventListener('click', mobMenu)
  //}
}

toTop.addEventListener('click', backToTop)

buttonMobile.addEventListener('click', mobMenu)