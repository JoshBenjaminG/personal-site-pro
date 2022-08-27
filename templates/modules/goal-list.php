<?php 

$header = $module["header"];
$sections = $module["sections"];


?>

<section class="goal-list">
	
		<inner-column>

	
		<generic-text>
			<h1 class="attention-voice"><?=$header?></h1>
		</generic-text>

		<?php foreach($sections as $section) { ?>
	 		<section class="goal">
				<h1 class="attention-voice"><?=$section["header"]?></h1>
				<p><?=$section["content"]?></p>
			</section>
		<?php } ?>	

	
		</inner-column>

</section>