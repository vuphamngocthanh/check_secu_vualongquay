<!--icon menu su dụng trong giao diện mobile-->
<section class="row-section top-bar hidden-xs">
    <div class="container">
        <?php $setting = $this->requestAction('/comment/setting'); ?>
        <?php foreach ($setting as $settings) { ?>
            <!--
          <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                <div id="top-cart" class="top-cart-block col-mds-1 nopadding" style="padding:25px 0px 5px 0px !important; ">
                    <a href="<?php echo DOMAIN;?>xem-gio-hang" id="top-cart-trigger"><img src="<?php echo DOMAIN;?>images/cart_bg.png" />
                        <span class="top_cart_qty">
                            <?php if(isset($shopingcart)){echo count($shopingcart);}else{echo '0';}?></span>
                    </a>

                </div>
            </div>
-->
            <div class="top-bar-box">
                <!-- <div class="shipping hidden-sm hidden-xs">
                    <div class="im fa fa-map-marker">
                    </div>
                    <div class="desi">
                        <span>Địa chỉ: </span>
                        <span>
                            <?php echo $settings['Setting']['address'];?></span>
                    </div>
                </div> -->
                <div class="shipping hidden-sm hidden-xs">
                    <div class="im fa fa-clock-o">
                    </div>
                    <div class="desi">
                        <span>Giờ mở cửa: </span>
                        <span>
                            <?php echo $settings['Setting']['phone'];?></span>
                    </div>
                </div>
                <div class="shipping hidden-sm hidden-xs">
                    <div class="im fa fa-phone">
                    </div>
                    <div class="desi">
                        <span>Hotline: </span>
                        <span>
                            <?php echo $settings['Setting']['mobile'];?></span>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</section>