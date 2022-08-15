<?php 

include('functions.php'); 
	
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

$modules = getData($page);

include('templates/modules/header.php');

// include('templates/pages/' . $page . '.php');
foreach($modules as $module) {
	include("templates/modules/$module[module].php");
}

include('templates/modules/footer.php');

?>