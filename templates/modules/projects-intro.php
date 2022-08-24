<?php 

$projects = getData('data/projects.json');

?>

<section class='stuff'>
<inner-column>


  <projects-intro id='projects'>

    <header>
      <h2 class='attention-voice'>Featured Projects...</h2>

      <p class='calm-voice'>I like to brush up on my design chops, as well as programming exercises. These are some recent projects I've been working on.</p>
    </header>

    <project-grid>

      <?php foreach ($projects as $project) { ?> 
        <?php include('templates/modules/project-card.php'); ?>
      <?php } ?>
    </project-grid>

  </projects-intro>

</inner-column>
</section>
