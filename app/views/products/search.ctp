  
   <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">                   
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><!--$css_item,$box_width,$position,$num_item_row -->
                        
                        <section id="product-listitem" class="clearfix">
                          <div class="listitem box_9">
                            <h2><span><i class="fa fa-th-list"></i> Kết quả tìm kiếm</span> 
                            </h2> 
                            <div class="row"> 
                             <?php if($products){?>
                            <?php foreach($products as $pr){?>  
                              <!-- Item 1-->
                              
                              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mg"> 
                                
                                <div class="product">
                                  <div class="image">
                                    <div class="img-overflow"> <a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>"> 
                                    <img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=400&amp;w=400&amp;zc=1" alt=""> </a>
                                    
                                    </div>
                                    <?php if($pr['Product']['price_cu']>$pr['Product']['price']){?>
                                    <span class="product-label-special-right label"><small>-<?php $xx=(($pr['Product']['price_cu']-$pr['Product']['price'])*100)/$pr['Product']['price_cu']; echo number_format($xx);?>%</small></span>                                    
                                    <?php }else{?>
                                    <span class="product-label-special-right label"><small>0%</small></span>                                    
                                    <?php }?><!--span class="product-label-special-left label">NEW</span--> 
                                    
                                  </div>
                                  <div class="des-product"> <a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html" title="<?php echo $pr['Product']['title'];?>" class="trans-hover">
                                    <h3 class="trans-hover"><?php echo $pr['Product']['title'];?></h3>
                                    </a>
                                    
                                    <div class="price">
                                    <span class="price-old"><?php echo number_format( $pr['Product']['price_cu'],0); echo " đ";?></span>
                                     <span class="price-new"><?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span> </div>
                                    <!-- <ul class="function">
                                      <li> <a href="<?php echo DOMAIN;?>mua-hang/<?php echo $pr['Product']['id'];?>" title="Mua sản phẩm này">
                                        <button type="button" class="btn btnitem"> <i class="fa fa-shopping-cart"></i> </button>
                                        </a> </li>
                                      
                                    </ul> -->
                                  </div>
                                </div>
                                
                                <!--item --> 
                                
                              </div>
                              <?php }}?>
                              
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                    <?php  if($products){ if($paginator->numbers()!=null){?>            
                        <div class="pagination pull-left">
                        <?php
                            echo "Trang: ";
                        	$paginator->options(array('url' => $this->passedArgs));                                    
                        	echo $paginator->numbers();
                        ?></div>
                        <?php }}?> 
   </div>
   