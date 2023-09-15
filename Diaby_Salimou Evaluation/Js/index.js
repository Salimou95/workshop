// onscroll = (event) => {
//     // var docHeight = window.innerHeight;
//     // console.log(docHeight);
//     // var scroll = $(window).height(); //+ $(window).scrollTop();
//     // if (docHeight > scroll){
//     //     console.log("ok");
//     // };

// };
// const element = document.getElementById("masked");
// element.scrollIntoView(false);

// window.addEventListener("scroll", () => {
//   console.log(window.scrollY); //scrolled from top
//   console.log(window.innerHeight); //visible part of screen
//   if (
//     window.scrollY + window.innerHeight >=
//     document.documentElement.scrollHeight
//   ) {
//     loadImages();
//   }
// });

// addEventListener("scroll", () => {
//     var element = document.querySelector("section");
//     function supprime() {
//         element.classList.remove("masked");

//     }
//     function add(){

//         element.classList.add("appear");
//     }

//     if (window.scrollY>500){
//         console.log("ok");
//         supprime()
//         add()
//     }
//   document.querySelector(".masked").style.overflow = "visible";
// console.log("ok");

// });
// onscroll = (event) => {

// };

document.querySelector("#menu").addEventListener("click", () => {
  console.log("ok");
  var change = document.querySelector(".font");
  var menuburger = document.querySelector(".menuburger");

  change.classList.toggle("change");
  menuburger.classList.toggle("menuburgerchange");
});


        var blockvoiture = document.querySelectorAll(".masked");

        window.addEventListener("scroll", () => {
          if (window.scrollY > 1200) {
            
setTimeout(() => {
      blockvoiture.forEach((element) => {
              element.classList.remove("masked");

              element.classList.add("appear");
            });
}, 500);
         
          }

        });

    