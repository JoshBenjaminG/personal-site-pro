
<?php
	// you could simplify the $variables up here if you want....
	// example
	$thumbnail = $article["thumbnail"];
	// it may or may not - be more readable
?>


<article-card>

	<picture>
		<img src='<?=$thumbnail?>' loading='lazy' alt='$todo'>
	</picture>

	<h2 class='attention-voice'><?=$article["heading"]?></h2>

	<p class="calm-voice tech"><?=$article["technologies"]?></p>

	<p class='calm-voice'><?=$article["description"]?></p>

	<a href='<?=$article["url"]?>' class="project-a">READ MORE</a>

</article-card>

