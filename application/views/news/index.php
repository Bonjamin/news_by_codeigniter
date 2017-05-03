<div class="jumbotron">
  <div class="container">
    <h1><?php echo $title; ?></h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <?php foreach ($news as $news_item): ?>
      <div class="col-md-4">
        <h2><?php echo $news_item['title']; ?></h2>
        <p><?php echo $news_item['text']; ?></p>
        <p><a class="btn btn-secondary" href="<?php echo site_url('news/'.$news_item['slug']); ?>" role="button">View article &raquo;</a></p>
      </div>
    <?php endforeach; ?>
  </div>
</div>
