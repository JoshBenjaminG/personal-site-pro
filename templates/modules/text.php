<?php 


	$heading = $section["heading"] ?? "Project Text Heading Module"; 
	$content = $section["content"] ?? "Project Text Content Module"

	
	

?>

<generic-text>
	<?php if ($heading) { ?>
		<h2 class="attention-voice"><?=$heading?></h2>
	<?php } ?>
	
	<?=$content?>
</generic-text>
