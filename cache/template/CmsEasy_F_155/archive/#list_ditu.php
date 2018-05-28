<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<div id="fh5co-contanctus" class="contact-us">
<div class="container">
<div class="title-comm">
<h3 class="welinain animate-box fadeInUp animated-fast">联系我们</h3>
<p class="line"></p>
<p class="linh25 f12 animate-box fadeInUp animated-fast">让大众获得更便捷可及、优质高效与值得信赖的法律服务</p>
</div>
<div class="row contactus">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="tcenter contactus-item animate-box fadeInUp animated-fast">
<div class="contact-icon">
<i class="icon icon-user"></i>
</div>
<div>
<h4>联系我们</h4>
<p class="f12">电话1：13116673394 (微信同号)</p>
<p class="f12">电话2：13757488797 (微信同号)</p>
<p class="f12">qq：13757488797</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="tcenter contactus-item animate-box fadeInUp animated-fast">
<div class="contact-icon">
<i class="icon icon-location2"></i>
</div>
<div>
<h4>公司地址</h4>
<p class="f12">浙江省宁波市南部商务区罗蒙大厦806室</p>
<p class="f12">邮编：315000</p>
</div>
</div>
</div>
</div>
<!-- <div class="gray-line"></div>
<div class="app-none">
<div class="title-comm">
<h3 class="welinain animate-box fadeInUp animated-fast">反馈意见</h3>
<p class="line animate-box fadeInUp animated-fast"></p>
<p class="linh25 animate-box fadeInUp animated-fast">您宝贵的建议是我们前进的动力，期待您的反馈和建议</p>
</div>
<div class="feedback">
<div class="feedback-l animate-box fadeInUp animated-fast">
<img src="/public/v2/images/fwzx.jpg" class="img-responsive">
</div>
<div class="feedback-r">
<div class="feedback-submit-con">
<input type="text" id="TxtTel" class="inputdiv form-control animate-box fadeInUp animated-fast" placeholder="请输入邮箱或电话号码，便于我们联系您">
<textarea id="TxtContent" class="form-control animate-box fadeInUp animated-fast"></textarea>
<a href="javascript:AddFeedback()" id="btn-submit" class="global-btn animate-box fadeInUp animated-fast" data-submit="1">提交</a>
</div>
</div>
</div>
</div> -->
</div>
</div>

<div id="fh5co-map">
<div id="l-map" class="l-map"></div>
</div>

<script type="text/javascript" src="http://api.map.baidu.com/getscript?v=3.0&ak=TP8TFzQgzyg1yx6t4k96F7AiFePln1Fo&services=&t=20170517145936"></script>
<script type="text/javascript">
var map = new BMap.Map("l-map");
map.addControl(new BMap.NavigationControl());
var local = new BMap.LocalSearch(map, {
renderOptions: {
map: map
}
});
local.search("浙江省宁波市南部商务区罗蒙大厦");
</script>

<?php echo template('footer.html'); ?>