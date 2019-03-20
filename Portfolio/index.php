<?php include_once "header.php"?>
  <div id="slider" class="carousel slide fade-short" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1" class="active"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 image" src="img/sliderImageOne.jpg">
        <div class="carousel-caption">
          <h1 class="display-3 fade-long textShadow">Welcome</h1>
          <p class="fade-long textShadow">Feel free to browse at your will.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image" src="img/sliderImageTwo.jpg">
        <div class="carousel-caption"></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  	</a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container-fluid padding">
    <div class="row jumbotron bg-light fade-short">
      <div class="col-md-10 col-lg-10 col-xl-10">
        <p class="lead">This website is dedicated to myself, and it contains all necessary information about me. In the skill segment you can find all of the skills I posses and the given skills I have mastered. In the experience segment you can check all of my previous work experience out. In the about segment you can find out a bit more about me.</p>
      </div>
      <div class="col-md-1 col-lg-1 col-xl-1">
        <a class="btn btn-outline-secondary btn-lg ml-1" type="button" href="about.php">More Info ..</a>
      </div>
    </div>
  </div>
  <div class="container-fluid padding mt-5" data-aos="fade-down" >
    <div class="row">
      <div class="col-12 text-center">
      <h1 class="display-4">Some of my skills</h1>
      <hr>
      </div>
    </div>
  </div>
  <div class="container-fluid padding row mt-4 mbc-20">
    <div class="card-deck">
      <div class="col-md-6 col-lg-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-down">
        <div class="card bg-light mb-3">
          <div class="card-header">
            <h1 class="display-6 text-center">Fullstack Website Development</h1>
          </div>
          <div class="card-body">
            <p class="card-text">Website Applications which range from basic websites without a backend all the way to SPA("Single Page Application") websites with an API backend to dispatch and accept data, along side some Cloud Computing and other internet services.</p>
            <a href="skills.php" class="btn btn-outline-secondary">More info</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-down">
        <div class="card bg-light mb-3">
          <div class="card-header">
            <h1 class="display-6 text-center">Android App Development</h1>
          </div>
          <div class="card-body">
            <p class="card-text">Android Applications which untilize multiple tools such as Firebase and AWS alongside the programming language Java, and the GUI coding language XML.</p>
            <a href="skills.php" class="btn btn-outline-secondary">More info</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-4 d-flex align-items-stretch" data-aos="fade-down">
        <div class="card bg-light mb-3">
          <div class="card-header">
            <h1 class="display-6 text-center">Desktop Software Development</h1>
          </div>
          <div class="card-body">
            <p class="card-text">Applications that have a basic GUI and utilize programming languages such as Java, C and C++, along side API-s which utilize Java as the main language.</p>
            <a href="skills.php" class="btn btn-outline-secondary">More info</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include_once "footer.php"?>