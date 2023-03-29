<div class="modun-dm-sp">
    <div class="tabsp-danhmuc"><h1>Tin Tức</h1></div>
    <div class="muitentabdm"></div>
      <div class="cont-box-dm-tintuc">
          <?php  if($news){?>
            <ul>
            <?php foreach($news as $itm){?>
                <li>
                <p class="imgtintuc"><a href="<?php echo DOMAIN?>chi-tiet/<?php echo $itm['News']['id']?>/<?php echo $itm['News']['alias']?>.html">
                <img width="184px" height="117px" src="<?php echo DOMAINAD.'timthumb.php?src='.$itm['News']['images']?>&amp;w=200&amp;zc=1"/></a></p>
                <h3><a title="<?php echo $itm['News']['title']?>" href="<?php echo DOMAIN?>chi-tiet/<?php echo $itm['News']['id']?>/<?php echo $itm['News']['alias']?>.html"><?php echo $itm['News']['title']?></a></h3>
                <p class="mota-tintuc"><?php echo strip_tags($this->Text->truncate( $itm['News']['introduction'],500,array('ending' => '...','exact' => false)));?></p>
                <p style="float:right; padding-right:10px;"><a style="color:#039;" href="<?php echo DOMAIN?>chi-tiet/<?php echo $itm['News']['id']?>/<?php echo $itm['News']['alias']?>.html">Xem chi tiết</a></p>
                </li>
            <?php }?>
            </ul>
            <div style="clear: both;">&nbsp;</div>
            <?php if($paginator->numbers()!=null){?>            
            <div class="phantrangpressroom">
            <?php
                echo "Trang: ";
            	$paginator->options(array('url' => $this->passedArgs));                                    
            	echo $paginator->numbers();
            ?></div>
            <div style="clear: both;">&nbsp;</div> 
        <?php }?> 
        <?php }else{echo "Đang cập nhật...";}?>     
    </div>
</div>