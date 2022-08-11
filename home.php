<?php 

include("modules/articles_data.php");

?>

<section class='welcome'>
<inner-column>

	<?php include('modules/graphic-diptych.php'); ?>

</inner-column>
</section>

<section class='get-involved'>
<inner-column>

	<?php foreach($modules as $module) {
		include("modules/$module[module].php");
	} ?>

</inner-column>
</section>
	

<section class='stuff'>
<inner-column>
	
	<?php include('modules/articles-intro.php'); ?>

</inner-column>
</section>

<section class='writing'>
<inner-column>
	
	<?php include('modules/writing-intro.php'); ?>

</inner-column>
</section>

<?php foreach($modules as $module) {
	include("modules/$module[module].php");
} ?>
	


