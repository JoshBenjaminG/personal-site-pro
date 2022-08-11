
<articles-intro id="projects">

  <header>
    <h2 class='attention-voice'>Fe<span>a</span>ture<span>d P</span>roject<span>s</span>...</h2>

    <p class='calm-voice'><span class="intro">I like to brush up on my design chops,</span> as well as programming exercises. These are some recent projects I've been working on.</p>
  </header>

  <article-grid>
    <?php include('articles_data.php'); ?><!-- acting as an example database -->

    <?php foreach ($projects as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>
  </article-grid>

</articles-intro>
