<?php
 
require_once 'C:\xampp\htdocs\SharpWEb\rating\init.php';

$query = $db->query("
          SELECT articles.id, articles.title, AVG(articles_rating.rating) AS rating
          FROM articles
          LEFT JOIN articles_rating
          ON articles.id = articles_rating.article
          GROUP BY articles.id 

	");

$articles = [];
while ($row = $query->fetch_object() ) {
	$articles[] = $row; 
}
?>
<!DOCTYPE html>  
<html>
<head>
	<meta charset="utf-8">
	<title>Articles</title>
</head>
<body>

     <?php foreach ( $articles as $article): ?>
        <div class="article">
        	<h3><a href="article.php?id=<?php echo $article->id; ?>"><?php echo $article->title;?></a></h3>
            <div class="article-rating">Rating: <?php echo round($article->rating,2); ?>/5</div>
        </div>


     <?php endforeach; ?>




</body>
</html>