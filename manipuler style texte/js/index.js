document.querySelector(".btn").addEventListener("click", () => {
    console.log("ok");
    var element = document.querySelector("section");
    element.classList.toggle("change");
    var secondelement = document.querySelector("p");
    secondelement.classList.toggle("change");
});