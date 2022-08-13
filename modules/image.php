<?php  

	$heading = $section["heading"] ?? false;
	$img = $section["img"];
	$caption = $section["caption"];
	$description = $section["description"];

?>

<generic-text>
	<?php if ($heading) { ?>
		
			<h2 class="attention-voice">test</h2>
		
	<?php } ?>
	
	<figure>
			
		<picture>
			
			<img src="<?=$img?>" alt="">
			
		</picture>
		

		<figcaption class="calm-voice"><?$caption?></figcaption>
	</figure>
	
	<?=$description?>

</generic-text>