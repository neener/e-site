<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="page">
  <div class="content" style="border:none;">
    <div class="content-nav">
   
      <?php foreach($page->children()->published() as $blogpost): ?>
        <div class="tab">
          <input type="checkbox">
          <label for="tab">
            <?= $blogpost->published() ?> - <?= $blogpost->title() ?>
          </label>
          <svg height="163" viewBox="0 0 139 163" width="139" xmlns="http://www.w3.org/2000/svg"><path d="m69.5 12 81.5 139h-163z" fill-rule="evenodd" transform="matrix(0 1 -1 0 151 12)"/></svg>
          <div class="tab-content">
            <div class="blogpost-text">
            <?= $blogpost->text()->kirbytext() ?>
            </div>  
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
  

<?php snippet('footer') ?>
