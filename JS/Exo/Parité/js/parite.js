var a = parseInt(prompt("inserez une valeur"));

var max =  a + 10  ;
for (var i = a; i < max; i++) {
  if (i % 2 === 0) {
    document.write(i + " est pair <br>");
  }
  else{
    document.write(i + " est impair <br>");
  }
}


