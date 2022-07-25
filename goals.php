<?php include('header.php'); ?>

<?php 

    $sections = [
        [
            "heading" => "",
            "goals" => [""],
        ],
        [
            "heading" => "End of course plan",
            "goals" => [ "Complete v3 of my portfolio", "Have a few good projects on my site"],
        ],
        [
            "heading" => "End of month plan (July)",
            "goals" => [ "Finish case study on responsive design", "Create a good WP project", "Reach out to companies near me to introduce myself."],
        ],          
    ];

    $projects = ["Portfolio Site v2", "Alpha-4 Homepage", "Layout Theme Challenge", "Responsive layout challenge", "Crud Challenge", "Routing PHP challenge", "WordPress Intro Project"];

?>

<section class="goals-page">
<inner-column>
	<h1 class="loud-voice">Goals Page</h1>
	<ul class="goals">
	    
	    <?php foreach ($sections as $section) { ?>
	        <li>
	            <h3><?=$section["heading"]?></h3>
	            <?php foreach($section["goals"] as $goal) { ?>
	                <li><?=$goal?></li>
	            <?php } ?>
	        </li>
	    <?php } ?> 
	</ul>


	<h3 class="calm-voice">Projects List</h3>
	<ul>
	    <?php foreach ($projects as $project) { ?>
	        <li><?=$project?></li>
	        <br>
	    <?php } ?> 
	</ul>
</inner-column>
</section>

<?php include('footer.php'); ?>