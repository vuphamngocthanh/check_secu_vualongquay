<div id="footer">
  <div class="wp-footer">
    <div class="content-footer">
        <?php $setting = $this->requestAction('/comment/setting') ?>
        <?php foreach($setting as $settings ){  ?>
    	<?php echo $settings['Setting']['footer'];?>
        <?php }?>        
    </div>
</div>
</div>