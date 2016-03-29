<div style="width: 800px" id="place">
    <table class="hovertable">
        <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"><td width="200px">订单号</td><td width="90px">金额</td><td width="400px">景点地址</td><td width="200px" style="padding-left: 100px">其它</td></tr>
        <?php
        foreach($arr as $ck=>$cv){
        ?>
        <div class="item clearfix favorite_194348">
            <!-- 参数： target, title, price, (location或path) desc_topic, desc_content -->

            <tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"><td><?php echo $cv['oname'];?></td><td>¥ <?php echo $cv['omoney']?>元</td><td> <?php echo $cv['vplace']?></td><td> <a href="/lists?oname=<?php echo $cv['oname'];?>" style="float: right">查看详情</a>
                    <a href="javascript:(void)" onclick="fun(<?php echo $cv['oid'];?>);" class="my_favorite_delete_cmd" style="float: right;margin-right: 20px" >删除</a></td></tr>

        </div>
        <?php
        }
        ?>
    </table>
    <!--收藏循环结尾--->
</div>