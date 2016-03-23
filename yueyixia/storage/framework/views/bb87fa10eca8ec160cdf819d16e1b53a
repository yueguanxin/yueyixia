<!--循环输出景点-->
<?php
	foreach($view as $k=>$v){
?>
 <div class="hilist__item fltriple__item ">
        

<div class="house house-index-house-item js-ga-house" data-ga-category="台湾/住宿/台东" data-ga-id="H32068" data-ga-name="台东背包监狱青年旅馆" data-ga-price="117" data-gmaps="15" data-target="32068" id="house_32068">

  <div class="hihitem__row house-item">
    <div class="hitem__image house-item-image lazy">
      <a href="/details?vid=<?php echo $v['vid']?>" target="_blank">
          <img style="display: block;" alt="台东民宿-台东背包监狱青年旅馆" src="img/img/<?php echo $v['vimg']?>">
</a>

      
<span data-url="/favorites/toggle_favor.json?resource_id=32068&amp;resource_type=House" class="js_houses_index_toggle_favor">
  <span class="house-item-favourite">
      <span class="yicon-heart" value="<?php echo $v['vid']?>"></span>
  </span>
</span>
<!--<span data-url="/favorites/toggle_favor.json?resource_id=4263&amp;resource_type=House" class="js_houses_index_toggle_favor">
  <span class="house-item-favourite">
      <span class="yicon-heart-red"></span>
  </span>
</span>-->
    </div>
  </div>


  <div class="hihitem__row house-item-info">
    <div class="hiinfo__row">
      <span class="hiinfo__name">
        <a href="http://www.fishtrip.cn/houses/hm9685818891/" title="台东背包监狱青年旅馆"><?php echo $v['vname']?></a>
      </span>
	  <?php
		foreach($ticket as $kk=>$vv){
			if($v['vid']==$vv['vid']){
	  ?>
				<span class="hiinfo__price">
				￥<?php echo $vv['tprice'];?> <small>起 / 1次</small>
				</span>
	  <?php
			break;
			}
		}
	  ?>
      <!--<span class="hiinfo__price">
        ￥117 <small>起 / 1晚</small>
      </span>-->
    </div>

    <div class="hiinfo__row">
      <a href="http://www.fishtrip.cn/houses/hm9685818891/#house_show_rates" target="_blank">
        <span class="hiinfo__rate-salse">
          4人购买 / 3评价
            
<span class="stars">
      <span class="yicon yicon-star-on-small yicon-m-star-on-small"></span>
      <span class="yicon yicon-star-on-small yicon-m-star-on-small"></span>
      <span class="yicon yicon-star-on-small yicon-m-star-on-small"></span>
      <span class="yicon yicon-star-on-small yicon-m-star-on-small"></span>
      <span class="yicon yicon-star-on-small yicon-m-star-on-small"></span>
</span>

        </span>

        <span class="hiinfo__score">
          <span data-original-title="预订、入住并评价&lt;br&gt;立得5元现金奖励" class="rate-reward-label " data-toggle="tooltip" data-placement="bottom" rel="tooltip" title="">

  <span class="yicon-rate-reward-normal"></span>
</span>

        </span>
</a>
    </div>

    <div class="hiinfo__row hiinfo__row-location">
      <a href="http://www.fishtrip.cn/houses/hm9685818891/#house_show_map" target="_blank">
        <span class="hiinfo__location">
          <?php echo $v['vplace'];?>
        </span>
</a>    </div>

  </div>

  <div class="hihitem__row house-item-rooms">

      <a href="http://www.fishtrip.cn/houses/hm9685818891/rooms-8942048673.html" target="_blank">
	  <?php
		foreach($ticket as $kk1=>$vv1){
			if($v['vid']==$vv1['vid']){
	  ?>
			<div class="hirooms__row">
			  <span class="hirooms__info">
				<?php echo $vv1['tname']?>
			  </span>
			  <span class="hirooms__feature">
			  </span>
			  <span class="hirooms__icon">
				<span class="yicon-go-right"></span>
			  </span>
			  <span class="hirooms__price">
				￥<?php echo $vv1['tprice']?>起
			  </span>
			</div>
	  <?php
			}
	   }	
	  ?>
</a>  </div>

<a href="/houses/hm9969470145/" rel="nofollow" target="_blank">
      <div class="hihitem__row house-items-rooms-more">
          查看详情
      </div>
</a>

</div>
      </div>
<?php
	}
?>

<!--循环结束--->