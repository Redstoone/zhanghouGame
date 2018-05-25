<script>
    $(function(){
        $('#frmGuestbookSubmit').submit(function() {
            if($('#nickname').val() == ''){
                alert("请输入用户名！");
                $('#nickname').focus();
                return false;
            }
           
            if($('#guestemail').val() == ''){
                alert("<?php echo lang('please_fill_in_the_mailbox');?>");
                $('#guestemail').focus();
                return false;
            }
            if($('#guesttel').val() == ''){
                alert('请输入有效的手机号码！');
                $('#guesttel').focus();
                return false;
            }

            if($('#content').val() == ''){
                alert("<?php echo lang('p_content');?>");
                $('#content').focus();
                return false;
            }
        });
    });
</script>
<form id="frmGuestbookSubmit" method="post" action="<?php echo url('guestbook/index');?>" name="frmGuestbookSubmit" class="form_message">

<div class="col-sm-6 col-md-6">
<div id="guestbook_name"  class="form-group">
<?php echo lang('name');?>
<input name="nickname" id="nickname" value="" class="guestbook_input form-control" />
</div>

<div id="guestbook_email" class="form-group">
<?php echo lang('email');?>
<input name="guestemail" id="guestemail" value="" class="guestbook_input form-control" />
</div>
<div id="guestbook_tel" class="form-group">
<?php echo lang('guesttel');?>
<input name="guesttel" id="guesttel" value="" class="guestbook_input form-control" />
</div>

<div id="guestbook_title" style="display: none;" class="form-group">
<?php echo lang('title');?>
<input type="text" name="title" id="title" value="" class="guestbook_input form-control" />
</div>
</div>

<div class="col-sm-6 col-md-6">
<div id="guestbook_textarea" class="form-group">
<?php echo lang('content');?>
<textarea id="content" name="content" class="guestbook_textarea form-control"></textarea>
</div>

<div id="guestbook_verify" class="form-group">
验证码
<div>
<input type='text' id="verify"  tabindex="3"  name="verify"  class="guestbook_input guest-verify form-control securityCheck"/><?php echo verify();?>
</div>
</div>
</div>


<?php if(config::get('verifycode') == 2){?>
<div id="verifycode_guest"></div>
<script src="http://api.geetest.com/get.php"></script>
<script>
        var loadGeetest1 = function(config) {
            window.gt_captcha_obj = new window.Geetest({
                gt : config.gt,
                challenge : config.challenge,
                product : 'float',
                offline : !config.success
            });
            gt_captcha_obj.appendTo("#verifycode_guest");
        };

        $.ajax({
                url : '<?php echo url('tool/geetest');?>',
            type : "get",
            dataType : 'JSON',
            success : function(result) {
            //console.log(result);
            loadGeetest1(result)
        }
        });
</script>
<?php } ?>

<div class="col-md-8">
    <input type="submit" name="submit" value="<?php echo lang(submit_on);?>" class="guestbook_btn btn btn-lg ">
</div>
</form>