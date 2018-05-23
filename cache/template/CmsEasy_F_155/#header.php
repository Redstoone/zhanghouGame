<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
<meta name="Generator" content="CmsEasy 6_1_0_20180508_UTF8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?php echo getKeywords($archive,$category,$catid,$type);?>" />
<meta name="description" content="<?php echo getDescription($archive,$category,$catid,$type);?>" />
<meta name="author" content="CmsEasy Team" />
<link rel="icon" href="<?php echo $base_url;?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $base_url;?>/favicon.ico" type="image/x-icon" />
<title><?php echo getTitle($archive,$category,$catid,$type);?> - <?php echo get(sitename);?></title>

  <link rel="stylesheet" href="<?php echo $skin_path;?>/css/animate.css">
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/icomoon.css">
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/flexslider.css">
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/style.css">
<script src="<?php echo $skin_path;?>/js/modernizr-2.6.2.min.js"></script>
</head>
<?php if(get('shield_right_key')=='1') { ?>
<body oncontextmenu="return false" onselectstart="return false">
<noscript><iframe src="/*.html>";</iframe></noscript>
<script>
function stop(){
return false;
}
document.oncontextmenu=stop;
</script>
<?php } else { ?>
<body>
<?php } ?>

<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only"><?php echo get(sitename);?></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="<?php echo $base_url;?>/" class="navbar-brand"><img src="<?php echo get('site_logo');?>" class="img-responsive" alt="<?php echo get(sitename);?>" width="<?php echo get(logo_width);?>" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="oen<?php if($topid==0) { ?> active<?php } ?>"><a href="<?php echo $base_url;?>/"><?php echo lang(homepage);?></a></li>
<?php if(is_array(categories_nav()))
foreach(categories_nav() as $t) { ?>
<li class="oen<?php if(count(categories($t['catid']))) { ?> dropdown<?php } ?>">
<a href="<?php echo $t['url'];?>"<?php if(config::get('nav_blank')==1) { ?> target=" _blank"<?php } ?><?php if(count(categories($t['catid']))) { ?> data-toggle="dropdown" data-submenu=""<?php } ?>
><?php echo $t['catname'];?><?php if(count(categories($t['catid']))) { ?><span class="caret"></span><?php } ?></a>
<?php if(count(categories($t['catid']))) { ?>
<ul class="dropdown-menu">
<?php if(is_array(categories_nav($t['catid'])))
foreach(categories_nav($t['catid']) as $t1) { ?>
<li<?php if(count(categories($t1['catid']))) { ?> class="dropdown-submenu"<?php } ?>>
<a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"><?php echo $t1['catname'];?></a>
<?php if(count(categories($t1['catid']))) { ?>
<ul class="dropdown-menu">
<?php if(is_array(categories_nav($t1['catid'])))
foreach(categories_nav($t1['catid']) as $t2) { ?>
<li<?php if(count(categories($t2['catid']))) { ?> class="dropdown-submenu"<?php } ?>>
<a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"><?php echo $t2['catname'];?></a>
<?php if(count(categories($t2['catid']))) { ?>
<ul class="dropdown-menu">
<?php if(is_array(categories_nav($t2['catid'])))
foreach(categories_nav($t2['catid']) as $t3) { ?>
<li<?php if(count(categories($t3['catid']))) { ?> class="dropdown-submenu"<?php } ?>><a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"><?php echo $t3['catname'];?></a>
<?php if(count(categories($t3['catid']))) { ?>
<ul class="dropdown-menu">
<?php if(is_array(categories_nav($t3['catid'])))
foreach(categories_nav($t3['catid']) as $t4) { ?>
<li><a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"><?php echo $t4['catname'];?></a>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /navigation -->




<?php if($topid==0) { ?>
<?php } else { ?>
<?php echo template('system/cslide.html'); ?>
<?php } ?>