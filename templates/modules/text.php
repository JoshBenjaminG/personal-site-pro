<?php 

	$heading = $section["heading"] ?? "Project Text Heading Module"; 
	$content = $section["content"] ?? "Project Text Content Module";
	
?>


<?php if ($page == 'style-guide') { ?>
<inner-column>
<?php } ?>
<generic-text>
	<?php if ($heading) { ?>
		<h2 class="attention-voice"><?=$heading?></h2>
	<?php } ?>
	
	<?=$content?>
</generic-text>
<?php if ($page == 'style-guide') { ?>
</inner-column>
<?php } ?>

