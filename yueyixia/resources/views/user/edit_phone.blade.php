<?php
	include('common/shezhi_header.php');
?>


  <div class="span10">
    <div class="right-container">
      <h4 class="right-title">修改登录手机号</h4>
      <form novalidate="novalidate" accept-charset="UTF-8" action="xg_phone" class="profile_form form-horizontal big-par-start update-cellphone-form" id="edit_user_260266" method="post"><div style="margin:0;padding:0;display:inline"></div>        <div class="control-group">
          <label class="control-label"> 现有手机号码 </label>
          <div class="controls">
              <p> <?php echo $arr['uphone']?> </p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label"> 新手机号码 </label>
          <div class="controls">
           
            <input class="span2" id="x_tel" name="x_phone" placeholder="手机号" size="30" type="text"><span id='xsp_tel'></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label"> 手机验证码 </label>
          <div class="controls">
            <input class="span2"  name="sms_code" type="text" onblur="hq3()" id='hq2'><span id='sp_hq1'></span>
            <button class="js-signup-send-captcha" name="button" type="button"  onclick="get_mobile_code();"> 发送验证码</button>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label"> 密码 </label>
          <div class="controls">
            <input class="span3" name="x_pwd" size="30" type="password">
          </div>
        </div>

        <div class="edit-cellphone-error js-sessions-error-msg"> </div>

        <div class="yu-form-actions">
          <button class="btn-yu-blue" name="button" type="submit" id='tel_xg'>更新</button>
        </div>
</form>    </div>
  </div>
</div>


    </div>
<script type="text/javascript">
//短信验证码
		function get_mobile_code(){
			tel=$('#x_tel').val();
        $.get('sms', {mobile:tel}, function(msg) {
            alert(jQuery.trim(unescape(msg)));
        });
	};

	/*flag=0;
	$("#tel_xg").click(function(){
		//alert("111");
		if(flag==0){
			return false;
		}
		return true;
	})*/
	//验证短信验证码
	function hq3(){
		hq2=$('#hq2').attr('value');
		
		$.get('sms',{hq1:hq2},function(data){
			
			if(data==1){
				$('#sp_hq1').html('ok');
				flag=1;
				return flag;
			}else if(data==0){
				$('#sp_hq1').html('验证码错误！！！');
				flag=0;
				return flag;
			}
		});
	}
	//验证手机号
	$('#x_tel').blur(function(){
		var tel=$('#x_tel').attr('value');
		var tel_r=/^1\d{10}$/;
		if(tel_r.test(tel)){
			$.get('/tel_one',{tel:tel},function(data){
				if(data==0){
					$('#xsp_tel').html('手机号码已经注册过约一下');
					flag=0;
					return flag;
				}else if(data==1){
					$('#xsp_tel').html('ok');
					flag=1;
					return flag;
				}
			})
		}else{
			$('#xsp_tel').html('手机号码无效');
			flag=0;
			return flag;
		}

	})
</script>

    
<?php
	include('common/shezhi_footer.php');
?>