<section class='writing'>
<inner-column>

<writing-intro>

  <header>
    <h2 class='attention-voice'><span>So</span>me Wr<span>it</span>ing...</h2>

    <p class='calm-voice'><span class='intro'>I try to document my process</span> while developing. Here are some examples of that writing.</p>
  </header>

  <writing-grid>
    <?php include('data/writing_data.php'); ?><!-- acting as an example database -->

    <?php foreach ($database as $article) { ?> 
      <?php include('writing-card.php'); ?>
    <?php } ?>
  <writing-grid>

</writing-intro>

</inner-column> 
</section>
