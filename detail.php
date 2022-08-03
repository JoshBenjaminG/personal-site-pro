<?php 

//get the projects 
include("modules/articles_data.php");
$slug = $_GET['project'];

foreach ($database as $article) {
	if ($article["slug"] == $slug) {
		$this_article = $article;
	}
}

//get the slug
//look at each of the projects
//if the slug is equal to query

?>

<section class="detail">
	<inner-column>
		<h1><?=$this_article["heading"]?></h1>
		<picture><img src="<?=$this_article["thumbnail"]?>" alt=""></picutre>
		<h1><?=$this_article["description"]?></h1>

		<p>In this project, i ....</p>
	</inner-column>
</section>