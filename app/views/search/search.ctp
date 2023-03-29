<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><section class="clearfix">       
 
        <section class="breadcrumbs clearfix">
            <a href="<?php echo DOMAIN;?>" title="Trang chủ"><i class="fa fa-home"></i></a>
                                                                            
                    &nbsp;&nbsp;/&nbsp;&nbsp;<a href="#"><?php echo $views['Product']['title'];?></a>                   
                                                    </section>

</section></div></div><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><section class="">
<script src="<?php echo DOMAIN;?>templates/t1-23/source/elevatezoom/jquery.elevatezoom.js"></script>
 <script src="<?php echo DOMAIN;?>templates/t1-23/source/jquery.fancybox.js?v=2.1.5"></script>  
 <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN;?>templates/t1-23/source/jquery.fancybox.css?v=2.1.5" media="screen" /> 
            <section>
                <article class="detail">                                
                    <div class="row">
                        <div class="img-blog col-lg-4 col-md-4 col-sm-4 col-xs-12" id="gallery_01">
                        <a class="elevatezoom-gallery active" data-update="" data-image="<?php echo DOMAINAD.$views['Product']['images']?>" href="javascript:void(0)" data-zoom-image="<?php echo DOMAINAD.$views['Product']['images']?>">
                            <img  id="main_img" src="<?php echo DOMAINAD.$views['Product']['images']?>" alt="<?php echo $views['Product']['title'];?>" >
                            </a>
                            
                        
                        <script type="text/javascript">
                    jQuery(document).ready(function () {
                    jQuery("#main_img").elevateZoom({gallery:'thumbs', cursor: 'pointer',  imageCrossfade: false,zoomType:'window'}); 
                    
                    jQuery("#main_img").bind("click", function(e) {  
                      var ez =   jQuery('#main_img').data('elevateZoom');
                      ez.closeAll(); //NEW: This function force hides the lens, tint and window 
                        jQuery.fancybox(ez.getGalleryList());
                      return false;
                    });
                    
                    }); 
                        
                    </script>
                                            
                        
                       
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">                          
                            <h2><?php echo $views['Product']['title'];?></h2>
                            <p><strong>Mã sản phẩm: </strong> <?php echo $views['Product']['code'];?></p>  
                            <p><strong>Tình trang: </strong> <?php echo $views['Product']['kichthuoc'];?></p> 
                            <p><strong>Khối lượng: </strong> <?php echo $views['Product']['donvi'];?> g</p> 
                                <div class="share">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <div class="addthis_native_toolbox"></div>
                                    
                                </div>                                      
                                                                
                                                             
                            <div class="price-num">
                                <div class="price">
                                            <span class="price-old"><?php echo number_format( $views['Product']['price_cu'],0); echo " đ";?></span>                                 
                                            <!--<span class="price-old">145.250đ</span>-->    
                                            <span class="price-new"><?php if($views['Product']['price']!=0){ echo number_format( $views['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span>
                                            <?php if($views['Product']['price_cu']>$views['Product']['price']){?>
                                    <span class="price-new" style="font-size: 13px !important; color: green;margin-left: 30px;"><small>Tiết kiệm: <?php $xx=(($views['Product']['price_cu']-$views['Product']['price'])*100)/$views['Product']['price_cu']; echo number_format($xx);?>%</small></span>                                    
                                    <?php }?>
                                <style>
                                #datmua-sp-detail {
                                  background: rgba(0, 0, 0, 0) url("http://thegioidemviet.vn/m/images/datmua.jpg") no-repeat scroll 0 0;
                                  float: right;
                                  height: 25px;
                                  line-height: 15px;
                                  margin: 5px 0 0;
                                  padding: 5px 0 0 30px;
                                  width: 98px;
                                }
                                </style>                                                                            </div>
                                <div class="quantity-input">
                                    <p id="datmua-sp-detail"><a href="<?php echo DOMAIN;?>mua-hang/<?php echo $views['Product']['id'];?>" style="color: #fff;">Đặt mua</a></p>
                                </div>
                            </div>
                            <div class="des" style="color: #333 ;">                                 
                                 <?php echo $views['Product']['content_en'];?>
                                 </div> 
                            <p class="des">
                             <?php $setting = $this->requestAction('/comment/setting') ?>
                            <?php foreach($setting as $settings ){  ?>
                            <?php echo $settings['Setting']['content'];?>
                            
                            <?php }?>
                                                                 
                                                                    </p>
                            
                               
                        </div>
                    </div> <!--End row-->                            
                </article>               
            </section>
                      
            <section id="product-tab">
                <ul class="tabs">
                    <li class="selected"><a class="item_tabs" tab_id="1"><i class="fa fa-th-list"></i> THÔNG TIN SẢN PHẨM</a></li>
                    <li class=""><a class="item_tabs" tab_id="2"><i class="fa fa-comments-o"></i>
 Bình luận</a></li>
            
                </ul>
                <ul id="tb_1" class="tab" style="display: block;">
                    <?php echo $views['Product']['content'];?>
                </ul>
                <ul id="tb_2" class="tab" style="display: none;">
                
                    <div class="fb-comments" data-width="100%" data-href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $views['Product']['id'];?>/<?php echo $views['Product']['alias'];?>.html" data-numposts="5" data-colorscheme="light"></div>
                </ul>
            </section> <!--end product-tab-->
                            
            <!-- LIST ITEM-->  
            <section id="product-listitem" class="clearfix">
                          <div class="listitem box_9">
                            <h2><span><i class="fa fa-th-list"></i> Sản phẩm liên quan</span></h2>
                            </h2>
                            <div class="row"> 
                             <?php if($sanphamkhac){?>
                            <?php foreach($sanphamkhac as $pr){?>  
                              <!-- Item 1-->
                              
                              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col94 mg"> 
                                
                                <div class="product">
                                  <div class="image">
                                    <div class="img-overflow"> <a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>"> 
                                    <img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=400&amp;w=400&amp;zc=1" alt=""> </a>
                                    
                                    </div>
                                    <?php if($pr['Product']['price_cu']>$pr['Product']['price']){?>
                                    <span class="product-label-special-right label"><small>-<?php $xx=(($pr['Product']['price_cu']-$pr['Product']['price'])*100)/$pr['Product']['price_cu']; echo number_format($xx);?>%</small></span>                                    
                                    <?php }else{?>
                                    <span class="product-label-special-right label"><small>0%</small></span>                                    
                                    <?php }?><!--span class="product-label-special-left label">NEW</span--> 
                                    
                                  </div>
                                  <div class="des-product"> <a href="<?php echo DOMAIN;?>chi-tiet-san-pham/<?php echo $pr['Product']['id'];?>/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>" class="trans-hover">
                                    <h3 class="trans-hover"><?php echo $pr['Product']['title'];?></h3>
                                    </a>
                                    
                                    <div class="price">
                                    <span class="price-old"><?php echo number_format( $pr['Product']['price_cu'],0); echo " đ";?></span>
                                     <span class="price-new"><?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span> </div>
                                    <ul class="function">
                                      <li> <a href="<?php echo DOMAIN;?>mua-hang/<?php echo $pr['Product']['id'];?>" title="Mua sản phẩm này">
                                        <button type="button" class="btn btnitem"> <i class="fa fa-shopping-cart"></i> </button>
                                        </a> </li>
                                      
                                    </ul>
                                  </div>
                                </div>
                                
                                <!--item --> 
                                
                              </div>
                              <?php }}?>
                              
                            </div>
                          </div>
                        </section> 
            
     <!--End row-->      
    </section></div></div></div>

