<?php 
	
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

include('header.php');

include($page . '.php');

include('footer.php');

?>