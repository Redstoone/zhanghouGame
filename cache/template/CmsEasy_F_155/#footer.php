<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!-- Footer Section -->
<footer id="fh5co-footer" role="contentinfo" class="footer">
  <div class="container">
    <div class="row row-pb-md">
      <div class="col-md-3 fh5co-widget">
        <h4>掌猴游戏</h4>
        <p>掌猴游戏一家专业的棋牌游戏开发商,诚招棋牌代理,棋牌游戏免费代理加盟合作,经典房卡模式,花色棋牌游戏平台海量用户等你代理加盟。</p>
      </div>
      <div class="col-md-3 col-md-push-1">
        <h4>代理加盟联系方式</h4>
        <ul class="fh5co-footer-links">
          <li>
            <a href="#">官方直招微信：huasennn666</a>
          </li>
          <li>
            <a href="#">诚招代理商QQ：849598330</a>
          </li>
          <li>
            <a href="#">玩家客服QQ：3263464515</a>
          </li>
          <li>
            <a href="#">客服邮箱：service@yangeit.com</a>
          </li>
          <li>
            <a href="#">招聘邮箱：zhaopin@yangeit.com</a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 col-md-push-1">
        <h4>联系我们</h4>
        <ul class="fh5co-footer-links">
          <li>浙江省宁波市南部商务区罗蒙大厦806室
            <li>
              <a href=""> 177-2466-3243（招商专线）</a>
            </li>
            <li>
              <a href="">zhanghou@yangeit.com</a>
            </li>
            <li>
              <a href="">www.zhanghou.com</a>
            </li>
        </ul>
      </div>

      <div class="col-md-3 col-md-push-1">
        <h4>工作时间</h4>
        <ul class="fh5co-footer-links">
          <li>周一 至 周五 09:00-17:30</li>
          <li class="qrcode-box">
            <img src="/public/v2/images/qrcode.jpg" alt="微信公众号二维码">
            <p>微信扫描二维码获取最新信息</p>
          </li>
        </ul>
      </div>

    </div>

    <div class="row copyright">
      <div class="col-md-12 text-center">
        <p>
          <small class="block"><?php echo get('sitename');?> <?php echo get(site_right);?> <?php if(config::get('site_icp')) { ?>
            <a rel="nofollow" href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank"><?php echo get('site_icp');?></a><?php } ?><?php if(config::get('site_beian_number')) { ?>&nbsp;&nbsp;
            <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=<?php echo get('site_beian_number');?>" rel="nofollow"
              target="_blank"><?php echo get('site_beian');?><?php echo lang(site_beian);?><?php echo get('site_beian_number');?><?php echo lang(number);?></a> <?php } ?>
          </small>
        </p>
      </div>
    </div>
  </div>
</footer>

<div class="gototop js-top">
  <a href="#" class="js-gotop">
    <i class="icon-arrow-up"></i>
  </a>
</div>

<!-- jQuery -->
<script src="<?php echo $skin_path;?>/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo $skin_path;?>/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $skin_path;?>/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo $skin_path;?>/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="<?php echo $skin_path;?>/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="<?php echo $skin_path;?>/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="<?php echo $skin_path;?>/js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="<?php echo $skin_path;?>/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="<?php echo $skin_path;?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $skin_path;?>/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="<?php echo $skin_path;?>/js/main.js"></script>
</body>

</html>