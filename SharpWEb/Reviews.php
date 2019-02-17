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
<head>
  <title>Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Mystyle.css">
</head>
<body>

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
      <li><a href="Register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="Login.html" target="_blank"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</div>
</nav>

<div class="container-fluid" style="margin-top: 70px;">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Also see..</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Top Trending</a></li>
        <li><a href="#section2">Most Recent</a></li>
        <li><a href="SubmitForm.php">Write your own reviews</a></li>
        <li><a href="rating/archive.php">Archive</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <div class="media">
    <div class="media-left">
      <img src="Avatars/avatar2.png" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><?php echo $article->title;?></h4>
      <img src="Revival Eminem .jpg" alt="Revival Album cover" width="320px" height="320px">
       <p>  Few texts in hip-hop are as bizarre as Eminem’s debut LP, Infinite. Released on a local Detroit label in 1996, it was either ignored or dismissed by those who
 ejected his whiteness and his borrowed aesthetic. Were it released in 2017, it might be celebrated for its scholarship of the form’s early classics, a la Joey Bada$$ or Roc Marciano. Instead, he was written off as a swagger jacker who sounded too much like Nas and AZ.</p>

<p>The criticism burned, and from that fire he formed his alter ego, Slim Shady. A manifestation of Marshall Mathers’ inner turmoil, the persona served as a vehicle for his darkest, most violent thoughts and helped him step out from the shadow of his forebears to channel the darkest parts of himself. On 1998’s The Slim Shady EP, he found his unique and disturbing voice. It caught the ear of Jimmy Iovine and Dr. Dre, who spent the next five years molding him into one of the biggest pop stars in the world.</p>

<p>In those early years, for all the controversy his lyrics caused, Slim Shady helped Mathers focus his energy, a cathartic outlet that was both messy and intensely fascinating. But after more than two decades, he’s older, well-fed, and in possession of pretty much every accolade there is to acquire. The Slim Shady suit no longer fits; once the outsider, he’s now the establishment. If Slim Shady fed on hate, what does he do now that he’s beloved? What motivates a healthy, sober, 45-year-old father with enough money for several lifetimes?...</p>
    </div>
  </div>
     

    <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="Avatars/avatar-homem-3.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Ann <small>Sep 29, 2018, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! I am cheering for you!! </p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="Avatars/img_avatar2.png" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anna <small>Sep 25, 2018, 8:25 PM</small></h4>
          <p>Spot on review mate. Would love to see more reviews..</p>
          <br>
          <p><span class="badge">1</span> Comment:</p><br>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>The Sharp Note</p>
</footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
