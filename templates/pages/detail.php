<?php 

//get the projects 
include("data/projects_data.php");
$slug = $_GET['project'];

$this_project = null;

foreach ($projects as $project) {
	if ($project["slug"] == $slug) {
		$this_project = $project;
	}
}
?>

<inner-column>

<?php foreach($this_project["case-study"]["sections"] as $section) { ?>

	<section class="module-section">
	
			<?php include("templates/modules/$section[module].php"); ?>

	</section>

<?php } ?>
</inner-column>