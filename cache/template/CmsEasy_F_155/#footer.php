<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!-- Footer Section -->
<footer id="fh5co-footer" role="contentinfo" class="footer">
  <div class="container">
    <div class="row row-pb-md">
      <div class="col-md-4">
        <h4>微信公众号</h4>
        <ul class="fh5co-footer-links">
          <li class="qrcode-box row">
            <div class="qrcode-item">
              <img src="<?php echo $skin_path;?>/images/yxdt.jpg" alt="掌猴游戏大厅">
              <small>掌猴游戏大厅</small>
            </div>
            <div class="qrcode-item">
              <img src="<?php echo $skin_path;?>/images/yyzx.jpg" alt="掌猴游戏运营中心">
              <small>掌猴游戏运营中心</small>
            </div>
          </li>
        </ul>
      </div>

      <div class="col-md-4">
        <h4>代理加盟联系方式</h4>
        <ul class="fh5co-footer-links">
          <li> 官方直招微信：13116673394 </li>
          <li> 官方直招微信：13757488797 </li>
          <li> 诚招代理商QQ：13757488797 </li>
          <li>客服邮箱：
            <a href="mailto:1152884413@qq.com">1152884413@qq.com</a>
          </li>
        </ul>
      </div>

      <div class="col-md-4">
        <h4>联系我们</h4>
        <ul class="fh5co-footer-links">
          <li>浙江省宁波市南部商务区罗蒙大厦806室</li>
          <li>131-1667-3394（招商专线1）</li>
          <li>137-5748-8797（招商专线2）</li>
          <li>
            <a href="mailto:1152884413@qq.com">1152884413@qq.com</a>
          </li>
          <li>
            <a href="http://www.zhanghou.com">www.zhanghou.com</a>
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
        <p style="display: none;">
          <small class="block">
            <?php echo getCopyRight();?><?php if(get('guestbook_enable')) { ?>&nbsp;&nbsp;
            <a rel="nofollow" title="<?php echo lang(feedback);?>" href="<?php echo url('guestbook');?>" target="_blank"><?php echo lang('feedback');?></a><?php } ?>
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

<script>
  $(function () {
    var _querystring = parseQueryString(window.location.href);
    if (_querystring.catid == '1') {
      $($('.navbar-nav li')[1]).addClass('active')
    } else if (_querystring.catid == '2') {
      $($('.navbar-nav li')[2]).addClass('active')
    }else if (_querystring.catid == '3') {
      $($('.navbar-nav li')[3]).addClass('active')
    } else if (_querystring.catid == '5') {
      $($('.navbar-nav li')[4]).addClass('active')
    }

    function parseQueryString(url) {
      var arr = []
      var res = {}
      url = url.split('#')[0]
      arr = url.split('?')
      arr.shift()
      var queryStr = arr.join('?')
      if (queryStr.trim().length === 0) {
        return res
      }

      arr = queryStr.split('&')
      for (var i = 0; i < arr.length; i++) {
        var itemArr = arr[i].split('=')
        var name = itemArr.shift()
        var value = itemArr.join('=')
        res[name] = value
      }
      return res
    }
  })
</script>

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