<script type="text/javascript" src="js/chat/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/chat/js/chat.js"></script>
<ul>
<?php foreach($friend as $fk=>$fv){?>
	<li>
		<label class="online">
		</label>
		<a href="javascript:;"><img src="img/userlogo/<?php echo $fv['uimg']?>"></a>
		<a href="javascript:;" class="chat03_name">
		<?php 
			echo $fv['uname'];
		?>
		</a>
		<?php
			$i=0;
			foreach($chat as $ck=>$cv){
				if($fv['uid']==$cv['uid']){
					$i++;
				}
			}
			if($i!=0){
		?>
			<span class="unread" value="1" style='margin-left:50px;line-height:29px;color:#33ccff'>(未读消息：<?php echo $i?>)</span>		
		<?php
			}
			echo "<span style='margin-left:50px;line-height:29px;color:#33ccff'></span>";
		?>
		<!--<span class="unread" value="1" style='margin-left:50px;line-height:29px;color:#33ccff'>(未读消息：<?php echo $fv['uid']?>)</span>-->
	</li>
<?php }?>
</ul>
