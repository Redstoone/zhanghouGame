<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<div class=" list-container fh5co-bg-section" style="padding: 3em 0;">
  <div class="container">
    <div class="row animate-box ">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>棋牌资讯</h2>
      </div>
    </div>
    <div class="row">
    <?php if(is_array(archive($_catid,$_typeid,$_spid,$_area,$_length,$_ordertype,$_limit,$_image,$_attr1,$_son,$_wheretype,$_tpl,$_intro_len,$_istop)))
foreach(archive($_catid,$_typeid,$_spid,$_area,$_length,$_ordertype,$_limit,$_image,$_attr1,$_son,$_wheretype,$_tpl,$_intro_len,$_istop) as $archive) { ?>
      <div class="col-lg-4 col-md-4">
        <div class="fh5co-blog animate-box">
          <a href="<?php echo $archive['url'];?>">
            <img class="img-responsive" src="<?php echo $archive['thumb'];?>" alt="">
          </a>
          <a href="<?php echo $archive['url'];?>" class="blog-text">
            <h3> <?php echo $archive['title'];?> </h3>
            <span class="posted_on"><?php echo sdate($archive['adddate'],'Y-m-d');?></span>
            <p><?php echo cut(strip_tags($archive['introduce']),46);?>…</p>
            <p class="btn btn-primary">查看更多</p>
          </a>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>