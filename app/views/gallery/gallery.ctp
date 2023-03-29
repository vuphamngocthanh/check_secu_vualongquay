<div class="content_col" id="block_900">
        <div class="news_box" id="module_1976">
          <div class="title_box">
            <h4><?php echo $album['Album']['name'];?></h4>
          </div>
          <div class="album-detail">
          <img id="img_view" src="<?php echo DOMAINAD.$album['Album']['images'];?>" width="520" class="big_thumb" />
            <div class="list_mini_thumb">
            <?php foreach($images as $slideshows){?>
            <a href="<?php echo DOMAINAD.$slideshows['Gallery']['images'];?>" onclick="return ViewImage('img_view','<?php echo DOMAINAD.$slideshows['Gallery']['images'];?>')">
            <img src="<?php echo DOMAINAD?>timthumb.php?src=<?php echo $slideshows['Gallery']['images'];?>&amp;h=91&amp;w=91&amp;zc=1" class="mini_thumb_item" />
            </a><?php }?>            
              <div style="clear: both">&nbsp;</div>
              <script type="text/javascript">function ViewImage(id,src){var img=document.getElementById(id);img.src=src;return false;}</script></div>

            <div style="clear: both"></div>
          </div>
        </div>
        <div class="news_box" id="module_1977">
          <div class="title_box">
            <h4>HÌNH ẢNH KHÁC</h4>
          </div>
          <ul class="gallery">
            <?php foreach($albums as $value){?>
            <li>
                <a title="<?php echo $value['Album']['name'];?>" href="<?php echo DOMAIN;?>gallery/<?php echo $value['Album']['id'];?>">
                <img class="thumb" alt="" src="<?php echo DOMAINAD?>/timthumb.php?src=<?php echo $value['Album']['images'];?>&amp;h=200&amp;w=200&amp;zc=1"/></a>
                <br/>
                <a title="<?php echo $value['Album']['name'];?>" href="<?php echo DOMAIN;?>gallery/<?php echo $value['Album']['id'];?>">
                <strong><?php echo $value['Album']['name'];?></strong>
                </a>
            </li>    
            <?php }?>           
          </ul>
          <div style="clear: both"></div>
        </div>
      </div>

 <div class="back" align="center"><a href="<?php echo DOMAIN;?>thu-vien-anh" >Quay lại trang trước</a></div>   
