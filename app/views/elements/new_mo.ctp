<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <!-- Product silder -->
<!--
    <div>

        <section class="box-category-menu" style="min-width: 266px !important; margin-top:10px; ">
            <div class="heading" style="border-radius: 8px 8px 0 0; padding:13px; font-weight:bold;  "> <span><i class="fa fa-th-list"></i>Lọc SP theo khoảng giá</span> </div>
            <ul class="list_category " style="position: initial;width: 100%">
                <li>
                    <a href="<?php echo DOMAIN;?>loc/0"> <i class="fa fa-angle-right"></i> <b>+ Giá từ 2 triệu tới 4 triệu</b></a>
                </li>
                <li>
                    <a href="<?php echo DOMAIN;?>loc/1"> <i class="fa fa-angle-right"></i> <b>+ Giá từ 4 triệu tới 6 triệu</b></a>
                </li>
                <li>
                    <a href="<?php echo DOMAIN;?>loc/2"> <i class="fa fa-angle-right"></i> <b>+ Giá từ 6 triệu tới 10 triệu</b></a>
                </li>
                <li>
                    <a href="<?php echo DOMAIN;?>loc/3"> <i class="fa fa-angle-right"></i> <b>+ Giá từ 10 triệu tới 20 triệu</b></a>
                </li>

            </ul>
        </section>

    </div>
-->

    <div>

        <!--<section id="typical" class="box-category">
      <div class="heading"> 
      	
        	<span><i class="fa fa-th-list"></i> Sản phẩm mới</span>
		            
       </div>
            <div class="main">                               
        <div id="typical-products-250581491884265" class="owl-carousel typical-products"> 

            <?php $khuyenmai = $this->requestAction('/comment/khuyenmai');?> 
            <?php foreach($khuyenmai as $pr){?>
            <div class="item col3">
		  					        
					        <div class="product">
		                      <div class="image">
		                        <div class="img-overflow">
		                           <a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>">
		                                <img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=400&amp;w=400&amp;zc=1" alt=""/> 
		                            </a>
		                          	<div class="ImageOverlay"></div>
		                        </div>
		
		                      </div>
		                        <div class="des-product">
		                            <a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>" class="trans-hover">
		                                <h3 class="trans-hover"><?php echo $pr['Product']['title'];?></h3>
		                            </a>
		                            <div class="price"> 
                                    <span class="price-old" style="margin-left: 15%;"><?php echo number_format( $pr['Product']['price_cu'],0); echo " đ";?></span>
                                     <span class="price-new"><?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span> 
                                    </div>
		                            
		                            <ul class="function">
					          		   <li> 
                                        <a href="<?php echo DOMAIN;?>mua-hang/<?php echo $pr['Product']['id'];?>" title="Mua sản phẩm này">
                                        <button type="button" class="btn btnitem"> <i class="fa fa-shopping-cart"></i> </button>
                                        </a> 
                                        </li>
					                </ul>
		                        </div>
							</div>

            </div>
            <?php }?>
           
                       
        </div>
		<div class="typicalNavigation">
            <a class="prev" id="prev250581491884265"><i class="fa fa-chevron-left"></i></a>
            <a class="next" id="next250581491884265"><i class="fa fa-chevron-right"></i></a>
        </div>
	</div> 
	 
    </section>
	 </div>  
      <script language="javascript">
    $(document).ready(function() {
		var owl250581491884265 = $('#typical-products-250581491884265');
			owl250581491884265.owlCarousel({
				items : 1, 
			  itemsDesktop : [1024,1], 
			  itemsDesktopSmall : [960,3],
			  itemsTablet: [640,2],
			});
			$("#next250581491884265").click(function(){
				owl250581491884265.trigger('owl.next');
			  })
			  $("#prev250581491884265").click(function(){
				
				owl250581491884265.trigger('owl.prev');
			  })		 
	});	
    
    </script>
    <div>
    <section class="box-category">
    				<div class="heading">
    					<span><i class="fa fa-th-list"></i> Sản phẩm bán chạy</span>
    				</div>
                    
    				<div class="main">
                    	<ul class="list">
                            <?php $sphot = $this->requestAction('/comment/sphot');?> 
                            <?php foreach($sphot as $pr){?>
                        	<li>
    							<a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html" style="float: left; width: 260px; min-height: 80px;" >
    								<img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=400&amp;w=400&amp;zc=1" alt="<?php echo $pr['Product']['title'];?>">
    																								
    								<p><?php echo $pr['Product']['title'];?></p>
    
    									    <span class="price-new"><?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span>    																								
                            </a>

                            <ul class="function" style="float: left; width: 161px; margin-top: -25px; margin-left: 20px;">
                                      <a href="<?php echo DOMAIN;?>mua-hang/<?php echo $pr['Product']['id'];?>" title="Mua sản phẩm này">
                                        <button type="button" class="btn btnitem"> <i class="fa fa-shopping-cart"></i> </button>
                                        </a>
                                      
                                    </ul>
    						</li>
                            <?php }?>
                        </ul> 
                                                    
    				</div>                    
    			</section>-->


    </div>
    <div>
        <style type="text/css">
            .divl .yl {
                height: 47px;
                overflow: hidden;
                padding: 15px;
            }

            img.yl {
                width: 80px;
                height: 70px;
                float: left;
                margin-right: 15px;
                border-radius: 50%;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border: solid 1px #ccc;
            }

            .divl .yl span {
                display: block;
                font-weight: bold;
                padding-bottom: 5px;
                color: #874143;
                font-size: 15px;
                padding-top: 5px;
            }

            .divl .yl strong {
                display: block;
                font-size: 15px;
                color: #ff0000;
            }
        </style>
        <section class="news">
            <h2> <span class="titles" style="color: #fff"> <i class="fa fa-comments-o"></i> Hỗ trợ trực tuyến</span> </h2>
            <ul>
                <?php $support = $this->requestAction('/comment/helpsonline') ?>
                <?php //var_dump($support); die;  
            foreach($support as $itm){?>
                <li> <a href="tel:<?php echo $itm['Helps']['user_mobile']; ?>" title="<?php echo $itm['Helps']['user_support'];?>">
                        <img class="yl" src="<?php echo DOMAINAD;?><?php echo $itm['Helps']['user_yahoo'];?>" height="70px" width="80px" alt="<?php echo $itm['Helps']['user_support'];?>" />
                        <h4 style="font-weight: bold;font-size: 14px; line-height: 15px;">
                            <?php echo $itm['Helps']['title'];?> -
                            <?php echo $itm['Helps']['user_support'];?>
                        </h4>
                    </a> <span class="date" style="color: red; font-size: 14px;"> <i class="fa fa-phone-square"></i>
                        <?php echo $itm['Helps']['user_mobile']; ?> </span> </li>
                <?php }?>

            </ul>
        </section>
    </div>
    <div>
        <section class="news">
            <h2> <span class="titles" style="color: #fff"><i class="fa fa-th-list"></i> Tin tức mới nhất</span> </h2>
            <ul>
                <?php $hotnew = $this->requestAction('/comment/hotnew');?>
                <?php foreach($hotnew as $value){?>
                <li> <a href="<?php echo DOMAIN;?>more/<?php echo $value['News']['alias'];?>.html" title="<?php echo $value['News']['title'];?>">
                        <img src="<?php echo DOMAINAD.'timthumb.php?src='.$value['News']['images']?>&amp;w=80&amp;zc=1" height="70px" width="80px" alt="<?php echo $value['News']['title'];?>" />
                        <h4>
                            <?php echo $value['News']['title'];?>
                        </h4>
                    </a> <span class="date"> <i class="fa fa-calendar-o"></i>
                        <?php echo date('d-m-Y', strtotime($value['News']['modified'])); ?> </span> </li>
                <?php }?>

            </ul>
        </section>
    </div>

</div>