//  une annee est dite bisextille si elle est divisible par 400
// ou bien si elle est divisible par 4 et pas par 100

// soit l'annee 1956
// ecrire un script qui permetb  de veirfier si l'annee est bisextille ou pas

let annee = 1956;

if (annee % 400 == 0 || (annee % 4 == 0 && !(annee % 100 == 0))) {
  console.log("annee bisextille");
} else {
  console.log("annee non bisextille");
}
let tableau = [1, 2, 22, 22, 22, 23, 22, 44, 11];
tableau.push(45);
tableau.pop();
tableau.shift();
delete tableau[2];

let myFruits = ["apple", "orange"];
console.log(myFruits);
myFruits.unshift("mango");
console.log(myFruits);
delete myFruits[1];
console.log(myFruits);
myFruits.push("strasberry");
console.log(myFruits);

for (let i = 0; i < myFruits.length; i++) {
  document.write(myFruits[i], "<br>");
}

let sum = 0;

let myNumber = [5, 80, 6, 9, 15];
for (let j = 0; j < myNumber.length; j++) {
  sum+= myNumber[j];
 
}
 console.log(sum)


 let test = ["bonjour", "toto",5, 7, 8,"toto" ];
 console.log(test.indexOf("toto"));
 let newTest = test.slice(1,4);
 console.log(newTest);
 console.log();



 let tab = [58, 4 ,7 ,25, 6];
 let nbmx = 0;
 for( i= 0;i<tab.length; i++){
    if(nbmx < tab[i]){
        nbmx = tab[i]
    }
 }
 console.log(nbmx);

let p =0;
 for(j= 0;j<tab.length; j++){
    if(tab[j]%2==0){  

        p = tab[j];
        console.log(p);
    }
 }
