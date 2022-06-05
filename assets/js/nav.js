/* window.addEventListener("scroll", function(){
    let header = document.querySelector("#nav");
    header.classList.toggle("stiki", window.scrollY > 0)
})


const hamburger = document.querySelector('.hamburger');
const close = document.querySelector('.close');
const nav = document.querySelector('#nav');

hamburger.addEventListener("click",function(){
    nav.classList.toggle('active');
})
close.addEventListener("click",function(){
    nav.classList.toggle('active');
}) */

$(document).ready(() => {
   $('#nav-toggle').click(() => {
     $(".nav-item").toggle(100);
     $(".nav-link").toggle(100);
   });
});