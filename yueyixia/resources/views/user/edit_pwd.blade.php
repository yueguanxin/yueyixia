<?php
	include('common/shezhi_header.php');
?>


  <div class="span10">
    <div class="right-container">
      <h4 class="right-title">修改密码</h4>

      <form novalidate="novalidate" accept-charset="UTF-8" action="/pwd_update" class="profile_form form-horizontal big-par-start" id="edit_user_260266" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"><input name="_method" value="put" type="hidden"><input name="authenticity_token" value="JG3luG6Q1yxduunIKzycN0AfHLVPc5fI3c+4Nx3iT5A=" type="hidden"></div>
        


        <div class="control-group">
          <label class="control-label" for="user_old_password">目前的密码</label>
          <div class="controls">
            <input class="span4" id="user_old_password" name="mq_pwd" size="30" type="password">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label required" for="user_password">密码</label>
          <div class="controls">
            <input class="span4" id="user_password" name="upwd" size="30" type="password">
            <span class="help-block">
              <span class="muted">安全强度</span>
              <div class="pwd_intension password-intension progress"></div>
            </span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="user_password_confirmation">确认密码</label>
          <div class="controls">
            <input class="span4" id="user_password_confirmation" name="qrpwd" size="30" type="password">
          </div>
        </div>

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