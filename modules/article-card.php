
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

	<text-content>

	<h2 class='attention-voice'><?=$article["heading"]?></h2>

	<p class='calm-voice'><?=$article["description"]?></p>

	<a class='calm-voice' href='<?=$article["url"]?>'>
		<span>Read more</span>
	</a>
	</text-content>

</article-card>
