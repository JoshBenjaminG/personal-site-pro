<?php 

$modules = getData("home");


?>

<?php foreach($modules as $module) {
	include("templates/modules/$module[module].php");
} ?>




