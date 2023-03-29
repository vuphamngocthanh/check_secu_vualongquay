<div class="right_col" id="block_585">
      <div class="module" id="module_1067">
        <div class="tcat">
          <h4>Tìm kiếm sản phẩm</h4>
        </div>
        <ul class="normal">
        <script language="javascript">
        function submitform()
        {
           document.forms["form1"].submit();
        }
        </script>
        <form action="<?php echo DOMAIN;?>products/search/" method="post" name="form1">
          <li>
            <input type="text" name="name_search" value="Tên sản phẩm..."  onclick="this.value=''" class="input_search" />
          </li>
          <li><a  href="#" onclick="submitform()" class="btnsearch"><img src="<?php echo DOMAIN;?>templates/estore023/images/btn_search.png" title="Tìm kiếm" /></a> </li>
          </form>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="module" id="module_1068">
        <div class="tcat">
          <h4>Giỏ hàng</h4>
        </div>
        <ul class="normal">
          <li>Không có&nbsp;sản phẩm</li>
        </ul>
      </div>
      <div class="module" id="module_1069">
        <div class="tcat">
          <h4>Hỗ trợ trực tuyến</h4>
        </div>
        <ul class="normal">
         <?php $support = $this->requestAction('/comment/helpsonline') ?>
             <?php  foreach($support as $itm ){?>                   
              <li class="support" style="padding-bottom:10px;"><a href="ymsgr:sendIM?<?php echo $itm['Helps']['user_yahoo']?>" title="Hỗ trợ Yahoo"><img src="http://opi.yahoo.com/online?u=<?php echo $itm['Helps']['user_yahoo']?>&m=g&t=14" style="float: left; width:56px;  top: 3px;margin-right: 5px" /></a> <span class="name"><?php echo $itm['Helps']['title']?><br />
                <?php echo $itm['Helps']['user_mobile']?></span>
                <div style="clear: both"></div>
              </li>   
              <?php }?>       
        </ul>
      </div>
      <div class="module" id="module_1070">
        <div class="tcat">
          <h4>Tin tức</h4>
        </div>
        <?php $hotnew = $this->requestAction('/comment/hotnew');?>                 	       
        <ul class="news_hot">
        <?php foreach($hotnew as $value){?>
          <li><a href="<?php echo DOMAIN;?>chi-tiet/<?php echo $value['News']['id'];?>/<?php echo $value['News']['alias'];?>.html"><?php echo $value['News']['title'];?></a></li>
        <?php }?>
        </ul>       
      </div>
      <div class="module" id="module_971">
        <div class="tcat">
          <h4>Video</h4>
        </div>
        <?php $video = $this->requestAction('/comment/videos') ?>
        <?php  foreach($video as $video){?> 
        <?php 
        $url = $video['Video']['LinkUrl'];
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );     
        ?>
       <iframe width="180" height="180" src="http://www.youtube.com/embed/<?php echo $my_array_of_vars['v'];?>" frameborder="0" allowfullscreen></iframe>
       <?php }?>
      </div>      
      <div class="module" id="module_1074">
        <div class="tcat">
          <h4>Quảng cáo</h4>
        </div>
        <ul class="box_ads">
        <?php $advr= $this->requestAction('/comment/advr') ?>
        <?php foreach($advr as $advs1 ){  ?>
        <li> <a href="<?php echo $advs1['Advertisement']['link'] ?>" target="_blank" rel="nofollow"><img src="<?php echo DOMAINAD.$advs1['Advertisement']['images']?>" border="0" width="200px" class="ads_img"alt="" /></a></li>	
         <?php }?>          
        </ul>
      </div>      
    </div>