var image = [
    ["89e06bf7-city-34713-16ed2f2c7f1.jpg", "image1"],
    ["discoverawsomenessatthelouvre13.jpg","image2"],
    ["3092281.jpg", "image3"],
];

let index = 0;

function bghead(index) {
  $("#head").css({
    "background-image": "url(" + image[index][0] + ")",
    "background-size": "cover",
    "background-repeat": "no-repeat",
  });

  $("h1").text(image[index][1]);
}

setInterval(() => {
  if (index == image.length) {
    index = 0;
  }
  bghead(index);

  index++;
}, 5000);

for(i =0; i<image.length; i++ ){
    let div =$("<div class='divImage'></div>")
    let p = $("<p class='titre'></p>").text(image[i][1]);
    let img =$('<img src ='+ image[i][0]+'>');
    div.append(p);
    div.append(img);
    div.appendTo("#galerie");
    div.click(function(){
         $("#head").css({
           "background-image": "url(" + img.prop("src") + ")",
           "background-size": "cover",
           "background-repeat": "no-repeat",
         });
         $("h1").text(p.text())
    })

}


