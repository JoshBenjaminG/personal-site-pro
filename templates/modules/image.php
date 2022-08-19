<?php  

	$heading = $section["heading"] ?? "Project Image Heading Module";
	$img = $section["img"] ?? "Project Image Img Module";
	$caption = $section["caption"] ?? "Project Image caption Module";
	$description = $section["description"] ?? "Project Image description Module";

?>

<?php if ($page == 'style-guide') { ?>
<inner-column>
<?php } ?>

<generic-text>
	<?php if ($heading) { ?>
		
			<h2 class="attention-voice"><?=$heading?></h2>
		
	<?php } ?>
	
	<figure>
			
		<picture>
			
			<img src="<?=$img?>" alt="">
			
		</picture>
		

		<figcaption class="calm-voice"><?$caption?></figcaption>
	</figure>
	
	<?=$description?>
</generic-text>

<?php if ($page == 'style-guide') { ?>
<inner-column>
<?php } ?>
