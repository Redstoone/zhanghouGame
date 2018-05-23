<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->


<!-- 中部开始 -->
<div class="container list-container">
<div class="row">
<div class="col-md-8">
<!-- 内容列表开始 -->
<?php if(is_array($archives))
foreach($archives as $i => $archive) { ?>
<div class="row news-list-text-pic">
<div class="col-md-3">
<a target="_blank" href="<?php echo $archive['url'];?>" class="img-auto"><img alt="<?php echo $archive['stitle'];?>" src="<?php echo $archive['thumb'];?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' class="img-responsive" data-src="<?php echo $archive['thumb'];?>" alt="<?php echo $archive['stitle'];?>" /></a>
</div>
<div class="col-md-9">
<p><?php echo $archive['adddate'];?></p>
<h4><a title="<?php echo $archive['stitle'];?>" href="<?php echo $archive['url'];?>" target="_blank"><?php echo $archive['title'];?></a></h4>
<p><?php echo cut(strip_tags($archive['introduce']),90);?>…<a href="<?php echo $archive['url'];?>" target="_blank">[<?php echo lang(more);?>]</a></p>        
</div>
</div>
<?php } ?>
<!-- 内容列表结束 -->
<div class="blank30"></div>
<!-- 内容列表分页开始 -->
<?php if(isset($pages)) { ?>
<div class="blank30"></div>
<?php echo category_pagination($catid);?>
<div class="blank30"></div>
<?php } ?>
<!-- 内容列表分页结束 -->
</div>
<div class="content-right-list col-md-4">
<?php echo template('list_right.html'); ?>
</div>
</div><!-- /row -->
</div><!-- /container -->
<!-- /中部开始 -->


<div class="blank30"></div>


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->


<?php echo template('footer.html'); ?>