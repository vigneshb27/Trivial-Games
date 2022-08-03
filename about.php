<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <style>
        .pad{
            margin-top : 80px;
        }
       
        #map {

  width: 100%;
  height: 100%;
  border-radius: 10px;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">3 In 1 Game</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#learn" class="nav-link">More about game</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact Info</a>
            </li>
            <li class="nav-item">
              <a href="main.php" class="nav-link">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="learn" class="pad">
      <div class="container">
<div class="col-md p-5">
            <h2>More about the Game</h2>
    <p>
        Hi there, this is Vignesh, the author of this respective page. I have done this as a project which includes
        all the essential stuffs for the web development. A whole bunch of HTML, CSS and JAVASCRIPT have been included
        here. Along with the fore-mentioned stuffs all these pages are coded in PHP which is the server side scriptting
        language. And all the inforamtion including the login credentials and the score in the respective games are
        stored in the MYSQL database. The instructions for the games are provided in the separate section and I hope
        you will make better use of it. This game is designed not only for the people with the particular age but playing
        needs knowledge in specific domain. For an instance if you didn't know about Marvel Avengers, it will be really 
        challenging to answer the quiz game. Also, some logical idea about cricket is required to play guess the player game.
        If you possess the fore-mentioned skills then it is going to be truly interesting for you....Hopefully you'll enjoy this.
    </p>
</div>
</div>
</section>
    <!-- Contact & Map -->
    <section id="contact" class="p-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4" id="pad">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> 162 GST Road
              </li>
              <li class="list-group-item">
                <span class="fw-bold">City:</span> Chengalpattu
              </li>
              <li class="list-group-item">
                <span class="fw-bold">State:</span> Tamil-Nadu
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Country:</span> India
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Email:</span>
                vigneshbaskaran2709@gmail.com
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Phone:</span>
                8144-756-335
              </li>
            </ul>
          </div>
          <div class="col-md">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <script>
      mapboxgl.accessToken =
        'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [79.983157, 12.684016],
        zoom: 12,
      })
    </script>


    

</body>
</html>