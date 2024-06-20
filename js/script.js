let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu-btn');
let closeBtn = document.querySelector('#close-navbar');

menuBtn.onclick = () =>{
   navbar.classList.add('active');
};

closeBtn.onclick = () =>{
    navbar.classList.remove('active');
 };

window.onscroll = () =>{
   navbar.classList.remove('active');
};



function isInViewport(element) {
   const rect = element.getBoundingClientRect();
   return (
       rect.top >= 0 &&
       rect.left >= 0 &&
       rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
       rect.right <= (window.innerWidth || document.documentElement.clientWidth)
   );
}

document.addEventListener('scroll', function() {
   const image = document.querySelector('.image1 img');
   if (isInViewport(image)) {
       image.classList.add('float-in');
   }
}, {
   passive: true
});