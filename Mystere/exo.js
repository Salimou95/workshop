const PLAT = document.getElementById("plat");
const DESERT = document.getElementById("desert");
const BTN = document.getElementById("btn");

let totalht = 0;
let totalttc = 0;

PLAT.addEventListener("click", () => {

  for
  totalht =
    Number(document.getElementById("plat").value) +
    Number(document.getElementById("desert").value);
  console.log(totalht);
  document.getElementById("totalht").value = totalht;
  totalttc = (totalht / 100) * 20 + totalht;
  document.getElementById("Totalttc").value = totalttc;
});
DESERT.addEventListener("click", () => {
  totalht =
    Number(document.getElementById("plat").value) +
    Number(document.getElementById("desert").value);
  document.getElementById("totalht").value = totalht;
  totalttc = (totalht / 100) * 20 + totalht;
  document.getElementById("Totalttc").value = totalttc;
});


// checkbox.addEventListener("change", function () {
    //   if (this.checked) {
        //     console.log("Checkbox is checked..");
        //   } else {
            //     console.log("Checkbox is not checked..");
            //   }
            // });
            
            
let checkbox = document.getElementById("checkbox");
BTN.addEventListener("click", runFunc);

function runFunc() {
  if (checkbox.checked === false) {
      document.getElementById("ici").style.color='red';
      console.log(checkbox.checked)
  } else {
      document.getElementById("ici").style.color = "black";
    console.log(checkbox.checked);
    document.getElementById("myForm").reset();

  }
}