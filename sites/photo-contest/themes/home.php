<?php
require_once "header.php";
?>
<section>
  <div id="slides">
    <?php foreach($banners as $banner): ?>
      <img src="<?php echo CONTENTURL . $banner; ?>" alt="Firefox Photo Contest" />
    <?php endforeach; ?>
  </div>
</section>
<section id="cara-bermain">
  <img src="<?php echo CONTENTURL . $cara_bermain; ?>" alt="Cara Bermain Firefox Photo Contest">
</section>
<section id="gallery" class="billboard list">
  <h1>Gallery</h1>
  <div class="loading">Loading Resource</div>
</section>
</section>
<section id="hadiah" class="billboard list">
  <h1>Hadiah</h1>
  <ul>
    <?php foreach($hadiah as $hitem) : ?>
    <li>
      <img src="<?php echo CONTENTURL . $hitem['image']; ?>">
      <h3><?php echo $hitem['title']; ?></h3>
      <p><?php echo $hitem['description']; ?></p>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
<section id="syarat-dan-ketentuan" class="billboard">
  <?php echo $syarat_dan_ketentuan; ?>
</section>
<?php
require_once "footer.php";
?>