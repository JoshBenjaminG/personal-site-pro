<?php  


	$heading = $section["heading"] ?? "";
	$img = $section["img"] ?? "Project Image Img Module";
	$caption = $section["caption"] ?? "";
	$description = $section["description"] ?? "Project Image description Module";
	$second_img = $section["second_img"] ?? "";

?>

<?php if ($page == 'style-guide') { ?>
<inner-column>
<?php } ?>

<generic-text>
	<?php if ($heading) { ?>
		
			<h2 class="attention-voice"><?=$heading?></h2>
		
	<?php } ?>
	
	
		<picture>
			
			<img src="<?=$img?>" alt="">
			
		</picture>


		

</generic-text>

<?php if ($caption) { ?>
	<?=$caption?>	
<?php } ?>

<?=$description?>




<?php if ($second_img) { ?>
	<picture>
		<img src="<=$second_imgsecond_img?>" alt="">
	</picture>
<?php } ?>

<?php if ($page == 'style-guide') { ?>
<inner-column>
<?php } ?>
