<?php
if(isset($_POST['title']))
{
$title = $_POST['title'];
}
else
{ echo "undefined!!";}
if(isset($_POST['rtypes']))
{
$rtype = $_POST['rtypes'];
}
if(isset($_POST['comment']))
{
$comment = $_POST['comment'];
}


$link = mysqli_connect("localhost","root","","website");

    $sql = "INSERT INTO articles(title, rtype, comment) " 
            . "VALUES ('$title','$rtype','$comment')";

$res = mysqli_query($link,$sql);

echo mysqli_error($link);
if($res==1)
{
  echo '<h1 style="padding-top:150px;">Review Submitted!<h1>';
   echo '<h3 style="padding-bottom:250px;">Thank you for the review!</h3>';



}
else
{
  echo 'Error...Try Again';
}


?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Review Submitted!</title>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Sharp Note</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Mystyle.css">
</head>
<body>
<div class="container-fluid, containew">
 
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
</div>
<footer class="container-fluid" style="bottom: 0;">
  <p>The Sharp Note</p>
</footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>