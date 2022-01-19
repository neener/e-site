<?php snippet('header') ?>
<?php snippet('nav') ?>

  <main class="page">
    <div class="cv-iframe">
      <object type="application/pdf"
        data="<?= $page->files()->first()->url() ?>"
        width="100%"
        height="100%">
      </object>
      <!-- <iframe class="responsive" src="<?= $page->files()->first()->url() ?>" frameborder="0" height="100%" width="100%"></iframe> -->
    </div>
  </main>

<?php snippet('footer') ?>
