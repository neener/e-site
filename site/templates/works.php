<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="page">
  <div class="content" style="border:none;">
    <div class="content-nav">
      <?php foreach($page->children()->listed() as $work): ?>
        <div class="tab">
          <input type="checkbox">
          <label for="tab"><?= $work->title() ?></label>
          <svg height="163" viewBox="0 0 139 163" width="139" xmlns="http://www.w3.org/2000/svg"><path d="m69.5 12 81.5 139h-163z" fill-rule="evenodd" transform="matrix(0 1 -1 0 151 12)"/></svg>
          <div class="tab-content">
            <p><?= $work->year() ?></p>
            <div class="fig-wrapper">
              <?php foreach ($work->images() as $image): ?>
                <figure>
                  <?= $image ?>
                  <figcaption><?= $image->caption() ?></figcaption>
                </figure>
              <?php endforeach ?>
            </div>
            <div class="press-release">
              <?= $work->pressrelease()->kirbytext() ?>
            </div>
            <div class="photography">
              <?= $work->photography() ?>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
