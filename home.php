<?php 

include("modules/articles_data.php");

?>

<section class='welcome'>
<inner-column>

	<?php include('modules/graphic-diptych.php'); ?>

</inner-column>
</section>



<?php foreach($modules as $module) {
	include("modules/$module[module].php");
} ?>




