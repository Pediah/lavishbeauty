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
   const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
   const windowWidth = (window.innerWidth || document.documentElement.clientWidth);

   return (
       rect.top <= windowHeight && 
       rect.left <= windowWidth && 
       rect.bottom >= 0 && 
       rect.right >= 0
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
