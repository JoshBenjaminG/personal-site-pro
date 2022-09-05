<?php 

$error_message = "";


if(isset($_POST['submit'])) {
	$to = "joshuaegage@gmail.com";
    $subject = "Form submission";

	if (strlen($_POST['name']) > 0) {
		$name = $_POST['name'];
	}
	if (strlen($_POST['message']) > 0) {
		$message = $name . " wrote:" . "\n\n" . $_POST['message'];
	}
    if ($message) {
    	mail($to, $subject, $message);
    } else {
    	$error_message = "<h3>There was an error.</h3>";
    }
}


?>

<section class='contact-me'>
	<inner-column>

		<contact-me>

			<h2 class="loud-voice">Let's talk!</h2>
			<p>Interesting in working with me? Let's get in touch.</p>
			<form action="" method="post">

				<input type="text" name="name" placeholder="Name"><br>
				<input type="text" name="email" placeholder="Enter your email..."><br>
				<textarea rows="5" name="message" cols="30" placeholder="Enter Message..."></textarea><br>
				<input type="submit" name="submit" value="Submit" class="form-input">
			</form>
			<?=$error_message?>

		</contact-me>

	</inner-column>
</section>
