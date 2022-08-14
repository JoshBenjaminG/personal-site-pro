<?php 
	
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

include('templates/modules/header.php');

include('templates/pages/' . $page . '.php');

include('templates/modules/footer.php');

?>