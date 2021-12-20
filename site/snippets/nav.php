<nav class="menu">
  <?php if($page->isHomePage()): ?>
    <a>Erika Ceruzzi</a>
    
  <?php else: ?>
    <a href="<?= $site->url() ?>">Erika Ceruzzi</a>
  <?php endif ?>
  <div class="logo"></div>

  <?php foreach ($site->children()->listed() as $item): ?>
    <a <?php e($item->isActive(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title() ?></a>
  <?php endforeach ?>
  <a href="https://instagram.com/<?= $site->instagram() ?>">Shop</a>
  <div class="tooltip">
    <button id="text_to_copy">erikaceruzzi@gmail.com</button>
    <button id="copy_button" onclick="copyEmail()" onmouseout="outFunc()"><span class="tooltiptext" id="myTooltip">Copy to clipboard</span>copy</button>
  </div>

</nav>

<!-- unixtimestamp.js needs this -->
<p id="date"></p>