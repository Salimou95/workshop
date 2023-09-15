function getData() {
  fetch(
    "https://api.themoviedb.org/3/movie/popular?api_key=d13880179d60ad44bad0b24c3ac48668&language=fr&page=1"
  )
    .then((response) =>
      response.json().then((data) => {
        showMovies(data.results);
      })
    )
    .catch((error) => {
      return error;
    });
}
getData();

function showMovies(data) {
  // console.log(data);
  for (let i = 0; i < data.length; i++) {
    let div = $("<div class='movie'></div>");
    let div1 = $("<div class='movie_img'></div>");
    let title = $("<h6></h6>").text(data[i].original_title);
    let img = $("<img>").prop(
      "src",
      "https://image.tmdb.org/t/p/w500" + data[i].poster_path
    );

    div1.append(img);
    div.append(div1);
    div.append(title);
    $(".container").append(div);

    img.click(function () {
      getMovieDetail(data[i].id);
    });
  }
}

function getMovieDetail(movieId) {
  fetch(
    `https://api.themoviedb.org/3/movie/${movieId}?api_key=d13880179d60ad44bad0b24c3ac48668`
  )
    .then((response) =>
      response.json().then((data) => {
        showMovieDetail(data);
      })
    )
    .catch((error) => {
      return error;
    });
}

function showMovieDetail(movieDetail) {
  console.log(movieDetail);
}