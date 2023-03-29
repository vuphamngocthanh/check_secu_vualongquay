<div class="banner">
    <div class="wp-banner">
    <?php $banner = $this -> requestAction('/comment/banner');?>
       <?php foreach($banner as $banner){ ?>
            <a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAINAD?><?php echo $banner['Banner']['images'];?>" /></a>       
    <?php }?>
    </div>
</div>
