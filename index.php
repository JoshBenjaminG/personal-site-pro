<?php 

include('functions.php'); 
	
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}



include('templates/modules/header.php');

$modules = getData($page);

foreach($modules as $module) {
	include("templates/modules/$module[module].php");
}

include('templates/modules/footer.php');

?>



