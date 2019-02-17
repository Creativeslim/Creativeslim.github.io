
<!DOCTYPE html>
<html>
<head>
<title>Submit Reviews..</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<div style="margin-top: 50px; padding-bottom: 50px; border: solid grey;">
<h2>Submit you Review here!</h2>

<div>
  <form action="submitprocess.php" method="post">
    <label>Title</label>
    <input type="text" id="title" name="title" placeholder="Enter post title..">
    <label >Album/Song/Artist</label>
    <select id="rtypes" name="rtypes">
      <option value="Album">Album</option>
      <option value="Artist">Artist</option>
      <option value="Song">Song</option>
    </select>
      <div class="form-group">
      <label >Review:</label>
      <textarea class="form-control" rows="15" id="comment" name="comment" placeholder="Write your review here.."></textarea>
    </div>

    <input type="submit" value="Submit">
    <input type="cancel" value="Cancel">
  </form>
</div>

</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
