<div class="menus">
    <div class="wp-menu">
      <div class="content-menu">
        <ul class="menu" id="menu">
        <li><a href="<?php echo DOMAIN?>" title="TRANG CHỦ" class="menulink">TRANG CHỦ</a></li>
        <?php $root = $this->requestAction('/comment/menu');											
             foreach ($root as $value){?>
             <?php if($value['Menu']['radio']==1){?>
             <li><a href="<?php echo $value['Menu']['link']?>" class="menulink"><?php echo $value['Menu']['name']?></a>
                <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);
                if($rootsp){?>
                <ul>                    										
                    <?php foreach ($rootsp as $value){?>
                    <li><a href="<?php echo $value['Menu']['link']?>"><?php echo $value['Menu']['name']?></a>
                    <?php $rootsp2 = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);
                        if($rootsp2){?>
                            <ul>                    										
                                <?php foreach ($rootsp2 as $values){?>
                                <li><a href="<?php echo $values['Menu']['link']?>"><?php echo $values['Menu']['name']?></a></li>
                                <?php }?>
                            </ul>
                        <?php }?>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
             </li>   
             <?php }elseif($value['Menu']['radio']==2){?>
             <?php if($value['Menu']['catp_parent_id']==null){?>
                <li><a href="<?php echo DOMAIN?>san-pham.html" class="menulink"><?php echo $value['Menu']['name']?></a>
             <?php }else{?>
                <li><a href="<?php echo DOMAIN?>danh-sach/<?php echo $value['Menu']['catp_parent_id']?>/<?php echo $value['Menu']['alias']?>.html" class="menulink"><?php echo $value['Menu']['name']?></a>
             <?php }?>
             <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);
                if($rootsp){?>
                <ul>                 										
                    <?php foreach ($rootsp as $value){?>
                    <li><a href="<?php echo DOMAIN?>danh-sach/<?php echo $value['Menu']['catp_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><?php echo $value['Menu']['name']?></a>
                    <?php $rootsp2 = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);
                        if($rootsp2){?>
                        <ul>                 										
                            <?php foreach ($rootsp2 as $values){?>
                            <li><a href="<?php echo DOMAIN?>danh-sach/<?php echo $values['Menu']['catp_parent_id']?>/<?php echo $values['Menu']['alias']?>.html"><?php echo $values['Menu']['name']?></a></li>
                            <?php }?>
                        </ul>
                        <?php }?>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
             </li>   
             <?php }elseif($value['Menu']['radio']==3){?>
             <li><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $value['Menu']['cate_parent_id']?>/<?php echo $value['Menu']['alias']?>.html" class="menulink"><?php echo $value['Menu']['name']?></a>
             <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);
                if($rootsp){?>
                <ul>
                    <?php foreach ($rootsp as $value){?>
                    <li><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $value['Menu']['cate_parent_id']?>/<?php echo $value['Menu']['alias']?>.html"><?php echo $value['Menu']['name']?></a>
                    <?php $rootsp2 = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);
                        if($rootsp2){?>
                        <ul>
                            <?php foreach ($rootsp2 as $values){?>
                            <li><a href="<?php echo DOMAIN?>danh-sach-bai-viet/<?php echo $values['Menu']['cate_parent_id']?>/<?php echo $values['Menu']['alias']?>.html"><?php echo $values['Menu']['name']?></a></li>
                            <?php }?>
                        </ul>
                        <?php }?>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
             </li>
             <?php }?>			
            <?php }?> 
        <li><a href="<?php echo DOMAIN?>lien-he.html" title="LIÊN HỆ" class="menulink" >LIÊN HỆ</a></li>
      </ul>
      <script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script> 
    </div>
</div>
</div>