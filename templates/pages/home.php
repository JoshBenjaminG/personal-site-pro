<?php 

include("data/projects_data.php");
include("data/pages/home_data.php");


?>

<section class='welcome'>
<inner-column>

	<?php include('templates/modules/graphic-diptych.php'); ?>

</inner-column>
</section>



<?php foreach($modules as $module) {
	include("templates/modules/$module[module].php");
} ?>




