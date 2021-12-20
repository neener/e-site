<?php snippet('header') ?>
<?php snippet('nav') ?>

  <main class="page">
    <div class="cv-iframe">
      <iframe src="<?= $page->files()->first()->url() ?>"></iframe>
  </div>
  </main>

<?php snippet('footer') ?>
