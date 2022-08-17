<!doctype html>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>RICHE US Official Site | Since 1989</title>
		<meta name='description' content='PSSST (CSS)'>
		<meta property='og:image' content='A CSS methodology so great, it needed a name.'>

		<link rel='stylesheet' href='../styles/site.css'>

	</head>

	<body>

<?php include("header.php"); 


$itemId = $_GET['id'];


$json = file_get_contents("../items.json");
$item_data = json_decode($json, true);
$items = $item_data["items"];


?>

<inner-column>

	<item-module>
		<picture>
			<img src="../images/<?=$items[$itemId]["image"]?>">
		</picture>
		</a>
	<div>
	<h2 class="attention-voice"><?=$items[$itemId]["name"]?></h2>
	<p class="calm-voice">$<?=$items[$itemId]["price"]?></p>

	<button class="calm-voice checkout-button">ADD TO SHOPPING BAG</button>
	</div>

</inner-column>

	</main>

	<footer>
			<inner-column>

				<?php include("footer.php"); ?>

			</inner-column>
		</footer>

	</body>

</html>