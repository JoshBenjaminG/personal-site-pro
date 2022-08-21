<?php 

	$github = $section["github"] ?? "Project Text Content Github";
	$site_link = $section["site_link"] ?? "Project Text Content Live Site";
	
?>

<?php if ($page == 'style-guide') { ?>
<inner-column>
<?php } ?>
<generic-text>

	<nav class="project-links">
		<a href="<?=$github?>" class="hover-underline-animation">Github</a>
		<a href="<?=$site_link?>" class="hover-underline-animation">Live Site</a>
	</nav>

</generic-text>
<?php if ($page == 'style-guide') { ?>
</inner-column>
<?php } ?>