<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Sharp Note</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Mystyle.css">

</head>

<body>

</body>
<div class="container-fluid, containew>
 
<nav class="navbar navbar-inverse">
   <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#note.html">The Sharp Note</a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
    </div>
<div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="SharpNote.php">Home</a></li>
      <li><a href="Reviews.php">Reviews</a></li>
      <li><a href="Lyrics.php">Lyrics</a></li>
      <li><a href="#">About</a></li>

    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</div>
</nav>


<div class="container, newcontain">
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border: solid silver;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/o-BRUNO-MARS-facebook.jpg" alt="Los Angeles" style="width:100%; height: 500px;" class="responsive, rnew">
        <div class="carousel-caption">
          <h2>Meet Fellow Music Enthusiasts!</h2>
          <p>Music is Love!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/music-1.jpg" alt="Chicago" style="width:100%; height: 500px;" class="responsive, rnew">
        <div class="carousel-caption">
          <h2>The # Note</h2>
          <p>For Sharp Reviews..</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/popular-music-performance-top-up-Cropped-1920x830.jpg" alt="New York" style="width:100%; height: 500px;" class="responsive, rnew">
        <div class="carousel-caption">
          <h2>Share your Musical Thoughts</h2>
          <p>We love quality ideas..!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="row" style="padding-top: 10px;">
 <div class="col-sm-4">
  <a target="_blank" href="images/Charlie_Puth_-_Nine_Track_Mind.png">
    <img src="images/Charlie_Puth_-_Nine_Track_Mind.png" alt="Charlie Puth" width=400 height="400" style="border:solid grey">
  </a>
  <div class="desc" style="border:solid grey; color: silver;"">Charlie Puth</div>
</div>

<div class="col-sm-4">
  <a target="_blank" href="images/Hotelcalifornia.jpg">
    <img src="images/Hotelcalifornia.jpg" alt="Eagles Album" width=400 height="400" style="border:solid grey">
  </a>
  <div class="desc" style="border:solid grey; color: silver;"">Eagles Hotel California</div>
</div>

<div class="col-sm-4">
  <a target="_blank" href="images/52190725.jpg">
    <img src="images/52190725.jpg" alt="Ed Sheeran- Devide" width=400 height="400" style="border:solid grey">
  </a>
  <div class="desc" style="border:solid grey; color: silver;"">Ed Sheeran- Devide</div>
</div>
</div>

<div class="row" style="padding-top: 10px;">
<div class="col-sm-4">
  <a target="_blank" href="images/600x600bf.jpg">
    <img src="images/600x600bf.jpg" alt="Eminem-Till i collapse" width="400" height="400" style="border:solid grey">
  </a>
  <div class="desc" style="border:solid grey; color: silver;">Eminem-Till i collapse</div>
</div>

<div class="col-sm-4">
  <a target="_blank" href="images/3832310-1x1-700x700.jpg">
    <img src="images/3832310-1x1-700x700.jpg" alt="Passenger- All the little lights" width="400" height="400" style="border:solid grey">
  </a> 
  <div class="desc" style="border:solid grey; color: silver;" >Passenger- All the little lights </div>
</div>

<div class="col-sm-4">
  <a target="_blank" href="images/coldplay-head-full-of-dreams.jpg">
    <img src="images/coldplay-head-full-of-dreams.jpg" alt="Coldplay- A Head full of dreams" width="400" height="400" style="border:solid grey">
  </a>
  <div class="desc" style="border:solid grey; color: silver;"">Coldplay- A Head full of dreams</div>
</div>
</div>

<footer class="container-fluid">
  <p>The Sharp Note</p>
</footer>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</body>
</html>



