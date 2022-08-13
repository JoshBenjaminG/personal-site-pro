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

<?php foreach($this_article["case-study"]["sections"] as $section) { ?>

	<section class="module-section">
	
			<?php include("modules/$section[module].php"); ?>

	</section>

<?php } ?>
</inner-column>