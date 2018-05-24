<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->


<!-- 中部开始 -->
<div class="container list-container">
<div class="row animate-box">
<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
<h2>棋牌代理资讯</h2>
</div>
</div>
<div class="row">
<?php if(is_array($archives))
foreach($archives as $i => $archive) { ?>
<div class="col-lg-4 col-md-4">
<div class="fh5co-blog animate-box">
<a href="<?php echo $archive['url'];?>" class="blog-text">
<h3> <?php echo $archive['title'];?> </h3>
<span class="posted_on"><?php echo sdate($archive['adddate'],'Y-m-d');?></span>
<p><?php echo cut(strip_tags($archive['introduce']),66);?>…</p>
<p class="btn btn-primary">查看更多</p>
</a>
</div>
</div>
<?php } ?>
<!-- 内容列表结束 -->
</div>
<!-- /row -->
<div class="blank30"></div>
<!-- 内容列表分页开始 -->
<?php if(isset($pages)) { ?>
<div class="blank30"></div>
<?php echo category_pagination($catid);?>
<div class="blank30"></div>
<?php } ?>
</div>
<!-- /container -->
<!-- /中部开始 -->

<div class="blank30"></div>

<?php echo template('footer.html'); ?>