

<?php
	include('common/shezhi_header.php');
?>
  <div class="span10">
    <div class="right-container">
      <h4 class="right-title">修改个人资料</h4>

      <form novalidate="novalidate" accept-charset="UTF-8" action="/users/YSnm7EJrS0A" class="profile_form form-horizontal big-par-start" id="edit_user_260266" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"><input name="_method" value="put" type="hidden"><input name="authenticity_token" value="JG3luG6Q1yxduunIKzycN0AfHLVPc5fI3c+4Nx3iT5A=" type="hidden"></div>        


        <div class="control-group">
          <label class="control-label required" for="user_nickname">昵称</label>
          <div class="controls">
            <input class="span4" id="user_nickname" name="user[nickname]" size="30" value="<?php echo session('name')?>" type="text">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="user_website">签名</label>
          <div class="controls">
            <input class="span4" id="user_website" name="user[website]" size="30" type="text">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="user_description">自我介绍</label>
          <div class="controls">
            <textarea class="span6" cols="40" id="user_description" name="user[description]" placeholder="140字以内" rows="6"></textarea>
          </div>
        </div>

        <div class="yu-form-actions">
          <button class="btn-yu-blue" name="button" type="submit">保存</button>
        </div>

</form>    </div>
  </div>
</div>


    </div>


    
<?php
	include('common/shezhi_footer.php');
?>