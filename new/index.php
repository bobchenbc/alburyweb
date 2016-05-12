<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="script/jquery.simpleWeather.min.js"> </script>
  <script src="script/showWeather.js"> </script>
  <!-- Customer Style-->
  <link rel="stylesheet" href="css/style_blue.css">
  <link rel="icon" href="images/Logo_icon.png">
</head>
<body>

<div class="container-fuid topbar">
    <div class="row"> 
        <div class="col-sm-6 text-left" id="weather">
        </div>
        <!--
        <div id="left-col" class="col-lg-4 col-sm-0 text-center" id="starrating" >
        <img id="starrating" src="images/starrating1.png">
        </div>
         -->
        <div class="col-sm-6 text-right" id="phone">
             <span class="glyphicon glyphicon-phone-alt"></span>(02) 6021 6911 
        </div>
    </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="images/Logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/cover.jpg" alt="Deluxe Queen">
        <div class="carousel-caption">
          <p> <img src="images/wifi_48px.png">Free WiFi</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/DLXQN2.jpg" alt="Deluxe Queen">
        <div class="carousel-caption">
          <p> <img src="images/parking_50px.png">Free onsite parking</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/DLXQN2.jpg" alt="Deluxe Queen">
        <div class="carousel-caption">
          <p> <img src="images/foxtel_256px.png"> Free Foxtel in deluxe room</p>
        </div>      
      </div>
      <div class="item">
        <img src="images/DLXQN2.jpg" alt="Deluxe Queen">
        <div class="carousel-caption">
          <p> <img src="images/cup_96px.png">Coffee &amp; tea in the room</p>
        </div>      
      </div>
      <div class="item">
        <img src="images/DLXQN2.jpg" alt="Deluxe Queen">
        <div class="carousel-caption">
          <p> <img src="images/air_conditioner_96px.png">All rooms air-conditioned</p>
        </div>      
      </div>
      <div class="item">
        <img src="images/DLXQN2.jpg" alt="Deluxe Queen">
        <div class="carousel-caption">
          <p> <img src="images/gym_104px.png"> Free Gym session at jetts</p>
        </div>      
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="container text-center">    
  <h3 style="background-color:#003366">What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
