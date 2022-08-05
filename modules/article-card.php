
<?php
	// you could simplify the $variables up here if you want....
	// example
	$thumbnail = $article["thumbnail"];
	// it may or may not - be more readable
?>


<article-card>
	<a href="?page=detail&project=<?=$article["slug"]?>" class="article-link">
	<picture>
		<img src='<?=$thumbnail?>' loading='lazy' alt='$todo'>
	</picture>

	<h2 class='attention-voice'><?=$article["heading"]?></h2>

	<p class="calm-voice tech"><?=$article["technologies"]?></p>

	<p class='calm-voice'><?=$article["description"]?></p>

	<a href='?page=detail&project=<?=$article["slug"]?>' class="project-a calm-voice">READ MORE</a>
	</a>

</article-card>

