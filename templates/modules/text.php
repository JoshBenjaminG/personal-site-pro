<?php 

	$heading = $section["heading"] ?? false; 
	$content = $section["content"];

?>

<generic-text>
	<?php if ($heading) { ?>
		<h2 class="attention-voice"><?=$heading?></h2>
	<?php } ?>
	
	<?=$content?>
</generic-text>