<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="title-home">
                <div class="s-badge"><svg class="svg-food-menu" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="url(#paint0_food_menu_radial)"></circle>
                        <path d="M47.1766 43.2078L34.6213 30.66L20.2592 16.3064C20.0629 16.1102 19.7967 16 19.5191 16H19.4451C19.0596 16 18.7134 16.2358 18.5722 16.5944C17.9544 18.1634 17.6904 19.7682 17.8089 21.235C17.944 22.907 18.5795 24.3546 19.647 25.4214L30.364 36.132C30.7696 36.5373 31.4268 36.5373 31.8323 36.132C32.2539 35.7107 32.9429 35.7299 33.3404 36.1741L43.1952 47.187C44.2483 48.2395 46.061 48.302 47.1766 47.187C48.2744 46.0899 48.2744 44.3049 47.1766 43.2078Z" fill="url(#paint1_food_menu_linear)"></path>
                        <path d="M27.7915 36.2132C26.6911 35.1126 24.9068 35.1126 23.8064 36.2132L16.8238 43.1972C15.7254 44.2958 15.7254 46.0836 16.8238 47.1823C17.8673 48.226 19.6725 48.3181 20.8082 47.1823L27.7915 40.1976C28.8916 39.0973 28.8916 37.3135 27.7915 36.2132Z" fill="url(#paint2_food_menu_linear)"></path>
                        <path d="M47.336 21.9779C46.9692 21.6111 46.3744 21.6111 46.0076 21.9779L42.2448 25.7414C41.878 26.1083 41.2832 26.1083 40.9164 25.7414C40.5497 25.3746 40.5497 24.78 40.9164 24.4132L44.6797 20.6492C45.0464 20.2824 45.0464 19.6878 44.6797 19.3211C44.3129 18.9542 43.7181 18.9542 43.3513 19.3211L39.5886 23.0845C39.2218 23.4514 38.627 23.4514 38.2602 23.0845C37.8935 22.7178 37.8935 22.1232 38.2602 21.7564L42.0235 17.9924C42.3902 17.6256 42.3902 17.0311 42.0235 16.6643C41.6567 16.2974 41.062 16.2974 40.6952 16.6643L34.7187 22.642C33.9063 23.4545 33.4212 24.5334 33.3526 25.68C33.3211 26.2088 33.4032 26.7711 33.7778 27.1457L36.8566 30.2252C37.231 30.5997 37.7933 30.6818 38.3219 30.6502C39.4683 30.5818 40.547 30.0965 41.3593 29.284L47.336 23.3061C47.7028 22.9394 47.7028 22.3447 47.336 21.9779Z" fill="url(#paint3_food_menu_linear)"></path>
                        <defs>
                            <radialGradient id="paint0_food_menu_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32) rotate(90) scale(64)">
                                <stop stop-color="#BC2030"></stop>
                                <stop offset="1" stop-color="#911A27"></stop>
                            </radialGradient>
                            <linearGradient id="paint1_food_menu_linear" x1="32.8906" y1="16" x2="32.8906" y2="48" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                <stop offset="1" stop-color="#F7F3F2"></stop>
                            </linearGradient>
                            <linearGradient id="paint2_food_menu_linear" x1="32" y1="16" x2="32" y2="48" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                <stop offset="1" stop-color="#F7F3F2"></stop>
                            </linearGradient>
                            <linearGradient id="paint3_food_menu_linear" x1="32" y1="16" x2="32" y2="48" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                <stop offset="1" stop-color="#F7F3F2"></stop>
                            </linearGradient>
                        </defs>
                    </svg></div>
                <span>
                    <?php echo $views['Product']['title'];?></span>
                <p class="s-subtitle"></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="">
                <script src="<?php echo DOMAIN;?>templates/t1-23/source/elevatezoom/jquery.elevatezoom.js"></script>
                <script src="<?php echo DOMAIN;?>templates/t1-23/source/jquery.fancybox.js?v=2.1.5"></script>
                <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN;?>templates/t1-23/source/jquery.fancybox.css?v=2.1.5" media="screen" />
                <section>
                    <article class="detail">
                        <div class="row">
                            <div class="img-blog col-lg-6 col-md-6 col-sm-6 col-xs-12" id="gallery_01">
                                <a class="elevatezoom-gallery active hidden-sm hidden-xs" data-update="" data-image="<?php echo DOMAINAD.$views['Product']['images']?>" href="javascript:void(0)" data-zoom-image="<?php echo DOMAINAD.$views['Product']['images']?>">
                                    <img id="main_img" src="<?php echo DOMAINAD.$views['Product']['images']?>" alt="<?php echo $views['Product']['title'];?>">
                                </a>
                                <div class="hidden-lg hidden-md">
                                    <img id="main_img" src="<?php echo DOMAINAD.$views['Product']['images']?>" alt="<?php echo $views['Product']['title'];?>">
                                </div>
                                <script type="text/javascript">
                                jQuery(document).ready(function() {
                                    jQuery("#main_img").elevateZoom({
                                        gallery: 'thumbs',
                                        cursor: 'pointer',
                                        imageCrossfade: false,
                                        zoomType: 'window'
                                    });
                                    jQuery("#main_img").bind("click", function(e) {
                                        var ez = jQuery('#main_img').data('elevateZoom');
                                        ez.closeAll(); //NEW: This function force hides the lens, tint and window   
                                        jQuery.fancybox(ez.getGalleryList());
                                        return false;
                                    });
                                });
                                </script>
                                <br>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="detail-r">
                                    <div class="price">
                                        <span class="price-old">
                                            <?php echo number_format( $views['Product']['price_cu'],0); echo " đ";?></span>
                                        <span class="price-new pl">
                                            <?php if($views['Product']['price']!=0){ echo number_format( $views['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span>
                                        <?php if($views['Product']['price_cu']>$views['Product']['price']){?>
                                        <span class="price-new" style="font-size: 13px !important; color: green;margin-left: 5px;"><small>Tiết kiệm:
                                                <?php $xx=(($views['Product']['price_cu']-$views['Product']['price'])*100)/$views['Product']['price_cu']; echo number_format($xx);?>%</small></span>
                                        <?php }?>
                                    </div>
                                    <div class="col-md-12 " style="padding: 5px 0px 5px 0 !important">
                                        <p><strong>Mã SP: </strong>
                                            <?php echo $views['Product']['code'];?>
                                        </p>
                                    </div>
                                    <div class="col-md-12 " style="padding: 5px 0px 5px 0 !important">
                                        <?php echo $views['Product']['content_en'];?>
                                    </div>
                                    <div class="des">
                                        <?php $setting = $this->requestAction('/comment/setting') ?>
                                        <?php foreach($setting as $settings ){  ?>
                                        <?php echo $settings['Setting']['content'];?>
                                        <?php }?>
                                    </div>
                                    <div class="quantity-input">
                                        <a class="popup-with-move-anim btn-big" href="<?php echo DOMAIN;?>mua-hang/<?php echo $views['Product']['id'];?>">
                                            <button type="button" class="btn btnitem bt_buynow">
                                                Đặt món</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End row-->
                    </article>
                </section>
                <section id="product-tab">
                    <ul class="tabs">
                        <li class="selected"><a class="item_tabs" tab_id="1"><i class="fa fa-th-list"></i> THÔNG TIN SẢN PHẨM</a></li>
                    </ul>
                    <ul id="tb_1" class="tab" style="display: block;">
                        <?php echo $views['Product']['content'];?>
                    </ul>
                </section>
                <!--end product-tab-->
                <!-- LIST ITEM-->
                <section id="product-listitem" class="clearfix">
                    <div class="listitem box_9">
                        <h2><span class="titles">Sản phẩm cùng loại</span>
                        </h2>
                        <div class="row is-flex">
                            <?php if($sanphamkhac){?>
                            <?php foreach($sanphamkhac as $pr){?>
                            <!-- Item 1-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mg">
                                <div class="product">
                                    <div class="image">
                                        <div class="img-overflow"> <a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>">
                                                <img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=400&amp;w=400&amp;zc=1" alt=""> </a>
                                        </div>
                                        <?php if($pr['Product']['price_cu']>$pr['Product']['price']){?>
                                        <span class="product-label-special-right label"><small>-
                                                <?php $xx=(($pr['Product']['price_cu']-$pr['Product']['price'])*100)/$pr['Product']['price_cu']; echo number_format($xx);?>%</small></span>
                                        <?php }else{?>
                                        <span class="product-label-special-right label"><small>0%</small></span>
                                        <?php }?>
                                    </div>
                                    <div class="des-product"> <a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>" class="trans-hover">
                                            <h3 class="trans-hover">
                                                <?php echo $pr['Product']['title'];?>
                                            </h3>
                                        </a>
                                        <div class="price">
                                            <span class="price-old">
                                                <?php echo number_format( $pr['Product']['price_cu'],0); echo " đ";?></span>
                                            <span class="price-new">
                                                <?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span> </div>
                                    </div>
                                </div>
                                <!--item -->
                            </div>
                            <?php }}?>
                        </div>
                </section>
                <!--End row-->
            </section>
        </div>
    </div>