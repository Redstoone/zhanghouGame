<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<div id="fh5co-project">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>棋牌游戏下载</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="#">
          <img src="<?php echo $skin_path;?>/images/project-1.jpg" alt="" class="img-responsive">
          <h3>斗地主</h3>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="#">
          <img src="<?php echo $skin_path;?>/images/project-2.jpg" alt="" class="img-responsive">
          <h3>斗地主</h3>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
        <a href="#">
          <img src="<?php echo $skin_path;?>/images/project-3.jpg" alt="" class="img-responsive">
          <h3>斗地主</h3>
        </a>
      </div>
    </div>
  </div>
</div>

<?php echo template('footer.html'); ?>