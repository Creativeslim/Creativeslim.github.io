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
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Mystyle.css"><title>Lyrics</title>
   

</head>
<body>
<div class="container-fluid, containew">
  <<nav class="navbar navbar-inverse">
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
        <li class="active"><a href="#section1">Most viewed</a></li>
        <li><a href="#section2">Most Recent</a></li>
        <li><a href="Submit Form.html">Contribute with Lyrics</a></li>
        <li><a href="#section3">Archive</a></li>
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
      <h4 class="media-heading">Dire Straits Lyrics<br>
                   "Brothers In Arms"</h4>
       <pre>  
Dire Straits Lyrics
"Brothers In Arms"

These mist covered mountains
Are a home now for me
But my home is the lowlands
And always will be

Some day you'll return to
Your valleys and your farms
And you'll no longer burn
To be brothers in arms

Through these fields of destruction
Baptisms of fire
I've witnessed your suffering
As the battle raged high

And though they did hurt me so bad
In the fear and alarm
You did not desert me
My brothers in arms

There's so many different worlds
So many different suns
And we have just one world
But we live in different ones

Now the sun's gone to hell
And the moon riding high
Let me bid you farewell
Every man has to die

But it's written in the starlight
And every line in your palm
We're fools to make war
On our brothers in arms .</pre>
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
          <p>Love this song!! </p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="Avatars/img_avatar2.png" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anna <small>Sep 25, 2018, 8:25 PM</small></h4>
          <p>Was searching for the lyrics everywhere..</p>
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
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>