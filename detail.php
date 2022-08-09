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
<inner-column class="information">
	<section class="detail">

		<section class="goal">
			<h1 class="attention-voice"><?=$this_article["case-study"]["goal"]?></h1>
			<p class="calm-voice"><?=$this_article["case-study"]["goal-p"]?></p>
		</section>

		<section class="research">
			<h1 class="attention-voice"><?=$this_article["case-study"]["research-header"]?></h1>
			<p class="calm-voice"><?=$this_article["case-study"]["research-header-p"]?></p>
			<picture>
				<img src="<?=$this_article["case-study"]["research-header-img"]?>" alt="">
			</picture>
			<p class="calm-voice"><?=$this_article["case-study"]["research-header-p2"]?></p>
		</section>
		
	</section>
</inner-column>