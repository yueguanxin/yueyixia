<!--收藏循环开始--->
<?php
	foreach($collection as $ck=>$cv){
?>
	<div class="item clearfix favorite_194348">
          
<!-- 参数 category, photo_path, target -->

<div class="photo house favorite-photo-item">
    <a href="http://www.fishtrip.cn/houses/NM00LEqd5ms" class="fpitem__link" target="_blank"><img alt="2a35bd421b3a918ed1135046321fef5b4cf382ca" src="img/img/<?php echo $cv['vimg']?>"></a>
</div>



<!-- 参数： target, title, price, (location或path) desc_topic, desc_content -->

<div class="info">
    <div class="price">
      <span class="num">¥ <?php echo $cv['vstartprice']?></span>
      <span class="unit">元起</span>
    </div>

    <div class="title">
        <a href="http://www.fishtrip.cn/houses/NM00LEqd5ms" target="_blank"><?php echo $cv['vname']?></a>
    </div>

    <div class="loc">
      <span class="yicon yicon-search-position"></span>
      <?php echo $cv['vplace']?>
    </div>


    <div class="description">
      <span class="topic"></span>
      
    </div>

    <a href="#" class="my_favorite_delete_cmd" value="<?php echo $cv['vid'];?>" data-method="put" data-remote="true" rel="nofollow">删除</a>
</div>


        </div>
<?php	
	}
?>
        
<!--收藏循环结尾--->