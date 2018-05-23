<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<!-- banner section -->
<!-- <section id="slider" class="content">
<ul class="slider-wrapper">
<?php if(get('slide_number')=='1') { ?>
<li class="current-slide">
<img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic1_title);?></h3>
<p><?php echo get(slide_pic1_info);?></p>
</div>
</li>
<?php } elseif (get('slide_number')=='2') { ?>
<li class="current-slide">
<img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic1_title);?></h3>
<p><?php echo get(slide_pic1_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic2_title);?></h3>
<p><?php echo get(slide_pic2_info);?></p>
</div>
</li>
<?php } elseif (get('slide_number')=='3') { ?>
<li class="current-slide">
<img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic1_title);?></h3>
<p><?php echo get(slide_pic1_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic2_title);?></h3>
<p><?php echo get(slide_pic2_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic3_title);?></h3>
<p><?php echo get(slide_pic3_info);?></p>
</div>
</li>
<?php } elseif (get('slide_number')=='4') { ?>
<li class="current-slide">
<img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic1_title);?></h3>
<p><?php echo get(slide_pic1_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic2_title);?></h3>
<p><?php echo get(slide_pic2_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic3_title);?></h3>
<p><?php echo get(slide_pic3_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic4_title);?></h3>
<p><?php echo get(slide_pic4_info);?></p>
</div>
</li>
<?php } elseif (get('slide_number')=='5') { ?>
<li class="current-slide">
<img class="first-slide" src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic1_title);?></h3>
<p><?php echo get(slide_pic1_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic2_title);?></h3>
<p><?php echo get(slide_pic2_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic3_title);?></h3>
<p><?php echo get(slide_pic3_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic4_title);?></h3>
<p><?php echo get(slide_pic4_info);?></p>
</div>
</li>
<li>
<img class="first-slide" src="<?php echo get(slide_pic5);?>" alt="<?php echo get(slide_pic5_title);?>">
<div class="caption">
<h3 class="slider-title"><?php echo get(slide_pic5_title);?></h3>
<p><?php echo get(slide_pic5_info);?></p>
</div>
</li>
<?php } ?>

</ul>
<div class="slider-shadow"></div>
<ul id="control-buttons" class="control-buttons"></ul>
</section> -->
<!-- /banner section -->


<!-- about section -->
<!-- <section class="about-us" id="about">
<div class="container">
<div class="col-lg-12">
<h2 class="text-center slideanim"><?php echo templatetag::tag('首页第一行栏目');?></h2>
<p class="text-center slideanim"><?php echo templatetag::tag('首页第一行栏目说明');?></p>
</div>
</div>
</section> -->
<!-- /about section -->

<!-- service section -->
<!-- <section class="our-services" id="service">
<?php echo templatetag::tag('首页第二行栏目');?>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-sun-o slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目一');?>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-desktop slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目二');?>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-life-ring slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目三');?>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-trophy slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目四');?>
</div>
</div>
</div>
<div class="row serv-row">
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-hourglass slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目五');?>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-cubes slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目六');?>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-shopping-basket slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目七');?>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6">
<div class="serv-info">
<i class="fa fa-fort-awesome slideanim" aria-hidden="true"></i>
<?php echo templatetag::tag('首页第二行子栏目八');?>
</div>
</div>
</div>
</div>
</section> -->
<!-- /service section -->
<!-- portfolio section -->
<!-- <section class="our-portfolio slideanim" id="portfolio">
<?php echo templatetag::tag('首页第三行栏目');?>
<div class="container">
<div id="grid-gallery" class="grid-gallery">
<section class="grid-wrap">
<ul class="grid">
<?php echo templatetag::tag('首页第三行栏目图片12条');?>
</ul>
</section>
</div>
</div>
</section> -->
<!-- portfolio section -->
<!-- team section -->
<!-- <section class="our-team" id="team">
<?php echo templatetag::tag('首页第四行栏目');?>
<div class="container">
<div class="main">
<?php echo templatetag::tag('首页第四行栏目图片4条');?>
</div>
</div>
</section> -->
<!-- /team section -->
<!-- <section class="contact-us slideanim" id="contact">
<?php echo templatetag::tag('首页第五行栏目');?>
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-5">
<div class="contact-info">
<h4 class="slideanim" style="margin-top: 0;"><?php echo lang(contactus);?> :-</h4>
<p class="slideanim">
<strong><?php echo lang(tel);?> :</strong> <?php echo get(tel);?></p>
<p class="slideanim">
<strong><?php echo lang(email);?> :</strong>
<a href="mailto:<?php echo get(email);?>"><?php echo get(email);?></a>
</p>
<p class="addr slideanim">
<strong><?php echo lang(address);?> :</strong> <?php echo get(address);?></p>
<ul class="social-icons2">
<div class="jiathis_style pc_show">
<a class="jiathis_button_qzone"></a>
<a class="jiathis_button_tsina"></a>
<a class="jiathis_button_tqq"></a>
<a class="jiathis_button_weixin"></a>
<a class="jiathis_button_renren"></a>
<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript">
var jiathis_config = {
hideMore: false
}
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
</ul>
</div>
</div>


<div class="col-lg-7 col-md-7 contact-us-r">

<?php echo callGuestbook();?>

</div>
</div>
</div>
</section> -->

<aside id="fh5co-hero" class="js-fullheight">
<div class="flexslider js-fullheight">
<ul class="slides">
<li style="background-image: url(<?php echo $skin_path;?>/images/img_bg_1.jpg);">
<div class="overlay-gradient"></div>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
<div class="slider-text-inner">
<h1>棋牌游戏加盟合作</h1>
<h2>棋牌游戏加盟合作</h2>
<p>
<a class="btn btn-primary btn-lg" href="#">代理加盟</a>
</p>
</div>
</div>
</div>
</div>
</li>
<li style="background-image: url(<?php echo $skin_path;?>/images/img_bg_2.jpg);">
<div class="overlay-gradient"></div>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
<div class="slider-text-inner">
<h1>棋牌游戏加盟合作</h1>
<h2>棋牌游戏加盟合作</h2>
<p>
<a class="btn btn-primary btn-lg btn-learn" href="#">代理加盟</a>
</p>
</div>
</div>
</div>
</div>
</li>
<li style="background-image: url(<?php echo $skin_path;?>/images/img_bg_3.jpg);">
<div class="overlay-gradient"></div>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
<div class="slider-text-inner">
<h1>棋牌游戏加盟合作</h1>
<h2>棋牌游戏加盟合作</h2>
<p>
<a class="btn btn-primary btn-lg btn-learn" href="#">代理加盟</a>
</p>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</aside>

<div id="fh5co-counter" class="fh5co-counters fh5co-bg-section">
<div class="container">
<div class="row">
<div class="col-md-4 text-center animate-box">
<span class="icon">
<i class="icon-user"></i>
</span>
<span class="fh5co-counter js-counter" data-from="0" data-to="3" data-speed="1" data-refresh-interval="50"></span>
<span class="fh5co-counter-label">3年潜心研发</span>
</div>
<div class="col-md-4 text-center animate-box">
<span class="icon">
<i class="icon-tree"></i>
</span>
<span class="fh5co-counter js-counter" data-from="0" data-to="800" data-speed="100" data-refresh-interval="50"></span>
<span class="fh5co-counter-label">覆盖全国800家联运合作商</span>
</div>
<div class="col-md-4 text-center animate-box">
<span class="icon">
<i class="icon-users"></i>
</span>
<span class="fh5co-counter js-counter" data-from="0" data-to="7000" data-speed="1000" data-refresh-interval="50"></span>
<span class="fh5co-counter-label">活跃玩家总数达7000万</span>
</div>
</div>
</div>
</div>

<div id="fh5co-practice" class="fh5co-bg-section">
<div class="container">
<div class="row animate-box">
<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
<h2>联运商6大特权</h2>
<p>免购买费，免加盟费，免平台费！只需有人脉立即当老板。</p>
</div>
</div>
<div class="row">
<div class="col-md-4 text-center animate-box">
<div class="services">
<span class="icon">
<i class="icon-home"></i>
</span>
<div class="desc">
<h3>
<a href="#">资产增值</a>
</h3>
<p>投资少门槛低，获取成功机率高
</p>
</div>
</div>
</div>
<div class="col-md-4 text-center animate-box">
<div class="services">
<span class="icon">
<i class="icon-eye"></i>
</span>
<div class="desc">
<h3>
<a href="#">自主创新</a>
</h3>
<p>参与产品制作，职业产品经理帮您规划产品需求
</p>
</div>
</div>
</div>
<div class="col-md-4 text-center animate-box">
<div class="services">
<span class="icon">
<i class="icon-shopping-cart"></i>
</span>
<div class="desc">
<h3>
<a href="#">专业售后</a>
</h3>
<p>专业团队为您进行技术维护运营，把控产品数值等
</p>
</div>
</div>
</div>
</div>
</div>
</div>

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

<div id="fh5co-blog" class="fh5co-bg-section">
<div class="container">
<div class="row animate-box">
<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
<h2>棋牌代理资讯</h2>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="fh5co-blog animate-box">
<a href="#">
<img class="img-responsive" src="<?php echo $skin_path;?>/images/project-4.jpg" alt="">
</a>
<div class="blog-text">
<span class="posted_on">Nov. 15th</span>
<h3>
<a href="#">Legal Consultation</a>
</h3>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<a href="#" class="btn btn-primary">Read More</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="fh5co-blog animate-box">
<a href="#">
<img class="img-responsive" src="<?php echo $skin_path;?>/images/project-2.jpg" alt="">
</a>
<div class="blog-text">
<span class="posted_on">Nov. 15th</span>
<h3>
<a href="#">Criminal Case</a>
</h3>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<a href="#" class="btn btn-primary">Read More</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="fh5co-blog animate-box">
<a href="#">
<img class="img-responsive" src="<?php echo $skin_path;?>/images/project-3.jpg" alt="">
</a>
<div class="blog-text">
<span class="posted_on">Nov. 15th</span>
<h3>
<a href="#">Business Law</a>
</h3>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<a href="#" class="btn btn-primary">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="fh5co-started" style="background-image:url(<?php echo $skin_path;?>/images/img_bg_2.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row animate-box">
<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
<h2>掌猴游戏</h2>
<p>掌猴游戏一家专业的棋牌游戏开发商,诚招棋牌代理,棋牌游戏免费代理加盟合作,经典房卡模式,花色棋牌游戏平台海量用户等你代理加盟。</p>
</div>
</div>
<div class="row animate-box">
<div class="col-md-8 col-md-offset-2 text-center">
<p>
<a href="#" class="btn btn-default btn-lg">立即加盟</a>
</p>
</div>
</div>
</div>
</div>

<?php echo template('footer.html'); ?>