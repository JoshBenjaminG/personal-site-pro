<?php 

//get the projects 
include("modules/articles_data.php");
$slug = $_GET['project'];

$this_article = null;

foreach ($projects as $article) {
	if ($article["slug"] == $slug) {
		$this_article = $article;
	}
}
?>
<inner-column>
<header>
	
		<h1><?=$this_article["heading"]?> Case Study</h1>
	
</header>

<?php foreach($this_article["case-study"]["sections"] as $section) { ?>

	<section>
	
			<?php include("modules/$section[module].php"); ?>

	</section>

<?php } ?>
</inner-column>