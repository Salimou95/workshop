
let menupanel = document.getElementById('menu-panel');

document.querySelector(".c-hamburger").addEventListener("click", () => { 
//  menupanel.style.transform =' translateX(0)' 

 menupanel.classList.toggle("show") 
 menupanel.classList.toggle("is-active"); 
});
