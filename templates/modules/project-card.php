<?php
	// you could simplify the $variables up here if you want....
	// example
	$thumbnail = $project["thumbnail"];
	// it may or may not - be more readable
?>


<project-card>
	<a href='?page=detail&project=<?=$project['slug']?>' class='project-link'>
	<picture>
		<img src='<?=$thumbnail?>' loading='lazy' alt='$todo'>
	</picture>

	<h2 class='attention-voice project-title'><span><?=$project['heading']?></span></h2>

	<p class='calm-voice tech'><?=$project['technologies']?></p>

	<p class='calm-voice'><?=$project['description']?></p>
	</a>
</project-card>
