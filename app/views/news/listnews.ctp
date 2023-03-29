<?php echo $this->element('left_mo');?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><section class="clearfix">       
 
    	<section class="breadcrumbs clearfix">
	        <a title="Trang chủ" href="<?php echo DOMAIN;?>"><i class="fa fa-home"></i></a>
											            
	            	&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#"><?php echo $cat['Category']['name'];?></a>	            	
	            	            					</section>

</section></div></div><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
   <section class="clearfix">
                  
				<section id="acc">
               
               		        <?php  if($listnews){?>
                            <?php foreach($listnews as $itm){?>                                             
                            <article class="itemblog">
                                <div class="row">
                                    <div class="img-blog col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <a title="" href="<?php echo DOMAIN?>more/<?php echo $itm['News']['alias']?>.html">
                                                <img alt="" src="<?php echo DOMAINAD.'timthumb.php?src='.$itm['News']['images']?>&amp;w=400&amp;zc=1"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <a title="" href="<?php echo DOMAIN?>more/<?php echo $itm['News']['alias']?>.html">
                                            <h2><?php echo $itm['News']['title']?></h2>
                                        </a>
                                        <div class="date">
                                            <i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php echo date('d-m-Y', strtotime($itm['News']['modified'])); ?>                                        </div>
                                        <p><?php echo strip_tags($this->Text->truncate( $itm['News']['introduction'],500,array('ending' => '...','exact' => false)));?></p>
                                    </div>
                                </div>                       
                            </article>
                            <?php }}?>
                            
                            
                              
                          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">                      
                           
                          </div> 
                        
                             
                    
				</section>             
				<!--End listitem-->
                
               
           
</section>
   <?php  if($listnews){ if($paginator->numbers()!=null){?>            
                        <div class="pagination pull-right">
                        <?php
                            echo "Trang: ";
                        	$paginator->options(array('url' => $this->passedArgs));                                    
                        	echo $paginator->numbers();
                        ?></div>
                        <?php }}?> 
</div></div></div>
 