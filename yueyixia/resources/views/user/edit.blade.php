

<?php
	include('common/shezhi_header.php');
?>
  <div class="span10">
    <div class="right-container">
      <h4 class="right-title">修改个人资料</h4>

      <form novalidate="novalidate" accept-charset="UTF-8" action="/edit_add" class="profile_form form-horizontal big-par-start" id="edit_user_260266" method="post" onsubmit='fun()'><div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"><input name="_method" value="put" type="hidden"><input name="authenticity_token" value="JG3luG6Q1yxduunIKzycN0AfHLVPc5fI3c+4Nx3iT5A=" type="hidden"></div>        


        <div class="control-group">
          <label class="control-label required" for="user_nickname">昵称</label>
          <div class="controls">
            <input class="span4" id="user_nickname" name="uname" size="30" value="<?php echo $arr['uname']?>" type="text"><span id='sp_name'></span>
          </div>
        </div>


        <div class="control-group">
          <label class="control-label" for="user_website">签名</label>
          <div class="controls">
            <input class="span4" id="user_website" name="uqianming" size="30" type="text" value='<?php echo $arr['uqianming']?>'>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="user_description">自我介绍</label>
          <div class="controls">
            <textarea class="span6" cols="40" id="user_description" name="my_jianshao" placeholder="140字以内" rows="6" value='<?php echo $arr['my_jieshao']?>'></textarea>
          </div>
        </div>

        <div class="yu-form-actions">
          <button class="btn-yu-blue" name="button" type="submit" id='xiugan'>保存</button>
        </div>

</form>    </div>
  </div>
</div>


    </div>

<script type="text/javascript">
	flad=0;
	$('#xiugan').click(function(){
		if(flad==0){
			return false;
		}
		return true;
	});


	$('#user_nickname').blur(function(){
		var name=$('#user_nickname').attr('value');
		$.get('/name_one',{name:name},function(data){
			if(data==0){
				$('#sp_name').html('该昵称已经有人在用，请您换一个呗');
					flag=0;
					return flag;
			}else{
				$('#sp_name').html('');
				flag=1;
				return flag;
			}
		});
	});
</script>
    
<?php
	include('common/shezhi_footer.php');
?>