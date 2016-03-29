<?php
  include('common/shezhi_header.php');
?>

<div class="span10">
    <div class="right-container js_user_profile_bank_update_page">
      <h4 class="right-title">更新(绑定)银行信息</h4>
      <form novalidate="novalidate" accept-charset="UTF-8" action="/bang_bank" class="profile_form form-horizontal big-par-start js_user_profile_bank_update_form" id="edit_user_265639" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"><input name="_method" value="put" type="hidden"><input name="authenticity_token" value="7Lz8zK6R9uq+dPZ1kMRRzZwGfj8fgPoUWCi74ni6E0c=" type="hidden"></div>
        
          <div class="control-group">
            <label class="control-label" for="user_profile_attributes_bank_info_name">收款方姓名</label>
            <div class="controls">
              <input class="span4" id="user_profile_attributes_bank_info_name" name="zhname"  size="30" type="text" value="<?php echo $arr['zhname']?>">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="user_profile_attributes_bank_info_bank">收款方银行</label>
            <div class="controls user-bank-info">
              <input class="span4" id="user_profile_attributes_bank_info_bank" name="bankname" size="30" type="text" value="<?php echo $arr['bankname']?>">
              <p>建议使用除了民生银行之外的收款方银行</p>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="user_profile_attributes_bank_info_number">收款方账号</label>
            <div class="controls user-bank-info">
              <input class="span4" id="user_profile_attributes_bank_info_number" name="banknum" value="<?php echo $arr['banknum']?>" size="30" type="text">
              <p>建议使用储蓄卡,信用卡有可能退款失败.</p>
            </div>
          </div>

          <input id="user_profile_attributes_id" name="uid" value="<?php echo $arr['uid']?>" type="hidden">        
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