<?php
	include('common/shezhi_header.php');
?>


  <div class="span10">
    <div class="right-container">
      <h4 class="right-title">修改登录手机号</h4>
      <form novalidate="novalidate" accept-charset="UTF-8" action="/users/YSnm7EJrS0A/update_cellphone" class="profile_form form-horizontal big-par-start update-cellphone-form" id="edit_user_260266" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"><input name="authenticity_token" value="JG3luG6Q1yxduunIKzycN0AfHLVPc5fI3c+4Nx3iT5A=" type="hidden"></div>        <div class="control-group">
          <label class="control-label"> 现有手机号码 </label>
          <div class="controls">
              <p> 0086 13241206822 </p>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label"> 新手机号码 </label>
          <div class="controls">
           
            <input class="span2" id="user_cellphone" name="user[cellphone]" placeholder="手机号" size="30" type="text">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label"> 手机验证码 </label>
          <div class="controls">
            <input class="span2" id="sms_code" name="sms_code" type="text">
            <button class="js-signup-send-captcha" name="button" type="button">发送验证码</button>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label"> 密码 </label>
          <div class="controls">
            <input class="span3" id="user_password" name="user[password]" size="30" type="password">
          </div>
        </div>

        <div class="edit-cellphone-error js-sessions-error-msg"> </div>

        <div class="yu-form-actions">
          <button class="btn-yu-blue" name="button" type="submit">更新</button>
        </div>
</form>    </div>
  </div>
</div>


    </div>


    
<?php
	include('common/shezhi_footer.php');
?>