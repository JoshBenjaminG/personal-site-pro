<?php 

$error_message = "";

if(isset($_POST['submit'])) {
    $to = "joshuaegage@gmail.com";
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " wrote:" . "\n\n" . $_POST['message'];
    if ($name) {
    	mail($to, $subject, $message);
    } else {
    	$error_message = "<h3>enter your name</h3>";
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

