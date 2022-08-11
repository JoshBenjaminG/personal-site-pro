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

<header>
	<inner-column>
		<h1><?=$this_article["heading"]?> Case Study</h1>
	</inner-column>
</header>

<?php foreach($this_article["case-study"]["sections"] as $section) { ?>

	<section>
		<inner-column>
			<?php include("modules/$section[module].php"); ?>
		</inner-column>
	</section>

<?php } ?>