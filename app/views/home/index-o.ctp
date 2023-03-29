<!-- <section id="product-listitem" class="clearfix about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home"><span>
                        </span>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row is-flex">
                    <?php $setting = $this->requestAction('/comment/setting') ?>
                    <?php foreach($setting as $settings ){  ?>
                    <?php echo $settings['Setting']['descriptions'];?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section id="product-listitem" class="clearfix">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home"><span>
                        Danh mục sản phẩm</span>
                </div>
            </div>
            <?php $category = $this->requestAction('/comment/danhmuc');?>
            <?php foreach($category as $k=>$subcat){?>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="cate-home">
                    <a href="<?php echo DOMAIN;?>product/<?php echo $subcat['Catproduct']['alias']?>.html" title="<?php echo $subcat['Catproduct']['name']?>"><img src="/admin/<?php echo $subcat['Catproduct']['images']?>">
                        <div class="cate-home-text">
                            <?php echo $subcat['Catproduct']['name']?>
                        </div>
                    </a>
                </div>
                <?php $categorys = $this->requestAction('/comment/showsmenu1/'.$subcat['Catproduct']['id']);
                        if($categorys){?>
                <?php }?>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<section id="product-listitem" class="clearfix product-tieubieu">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home"><span>
                        Thực đơn nổi bật</span>
                </div>
            </div>
            <?php $sptieubieu = $this->requestAction('/comment/sptieubieu');?>
            <?php foreach($sptieubieu as $pr){?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="product">
                    <div class="image">
                        <div class="img-overflow"><a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html">
                                <img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=400&amp;w=400&amp;zc=1" alt="<?php echo $pr['Product']['title'];?>"></a></div>
                        <?php if($pr['Product']['price_cu']>$pr['Product']['price']){?>
                        <span class="product-label-special-right label"><small>-
                                <?php $xx=(($pr['Product']['price_cu']-$pr['Product']['price'])*100)/$pr['Product']['price_cu']; echo number_format($xx);?>%</small></span>
                        <?php }else{?>
                        <span class="product-label-special-right label"><small>0%</small></span>
                        <?php }?>
                    </div>
                    <div class="des-product"><a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html">
                            <h3>
                                <?php echo $pr['Product']['title'];?>
                            </h3>
                        </a>
                        <!--                        <div class="masp"><strong>MS: </strong> <?php echo $pr['Product']['code'];?></div>-->
                        <div class="price">
                            <span class="price-old">
                                <?php echo number_format( $pr['Product']['price_cu'],0); echo " đ";?></span>
                            <span class="price-new">
                                <?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span> </div>
                        <ul class="function">
                            <li> <a href="<?php echo DOMAIN;?>mua-hang/<?php echo $pr['Product']['id'];?>" title="Mua sản phẩm này">
                                    <button type="button" class="btn btnitem"> <i class="fa fa-shopping-cart"></i> </button>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php $i=1; foreach($catproduct as  $root){?>
<section id="product-listitem" class="clearfix product-tieubieu">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home"><span>
                        <?php echo $root['Catproduct']['name'];?></span>
                </div>
                <?php if($i==1){?>
                <?php }?>
            </div>
            <?php $kmai = $this->requestAction('/comment/kmproduct/'.$root['Catproduct']['id']);?>
            <?php foreach($kmai as $pr){?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="product">
                    <div class="image">
                        <div class="img-overflow"><a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html">
                                <img src="<?php echo DOMAINAD.'timthumb.php?src='.$pr['Product']['images']?>&amp;h=400&amp;w=400&amp;zc=1" alt="<?php echo $pr['Product']['title'];?>"></a></div>
                        <?php if($pr['Product']['price_cu']>$pr['Product']['price']){?>
                        <span class="product-label-special-right label"><small>-
                                <?php $xx=(($pr['Product']['price_cu']-$pr['Product']['price'])*100)/$pr['Product']['price_cu']; echo number_format($xx);?>%</small></span>
                        <?php }else{?>
                        <span class="product-label-special-right label"><small>0%</small></span>
                        <?php }?>
                    </div>
                    <div class="des-product"><a href="<?php echo DOMAIN;?>detail/<?php echo $pr['Product']['alias'];?>.html">
                            <h3>
                                <?php echo $pr['Product']['title'];?>
                            </h3>
                        </a>
                        <!--                        <div class="masp"><strong>MS: </strong> <?php echo $pr['Product']['code'];?></div>-->
                        <div class="price">
                            <span class="price-old">
                                <?php echo number_format( $pr['Product']['price_cu'],0); echo " đ";?></span>
                            <span class="price-new">
                                <?php if($pr['Product']['price']!=0){ echo number_format( $pr['Product']['price'],0); echo " đ";}else { echo "Liên hệ";} ?></span> </div>
                        <ul class="function">
                            <li> <a href="<?php echo DOMAIN;?>mua-hang/<?php echo $pr['Product']['id'];?>" title="Mua sản phẩm này">
                                    <button type="button" class="btn btnitem"> <i class="fa fa-shopping-cart"></i> </button>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php $i++;}?>
<section id="product-listitem" class="clearfix about taisao">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home"><span>
                        TẠI SAO LỰA CHỌN CHÚNG TÔI?
                    </span>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <?php $setting = $this->requestAction('/comment/setting') ?>
                    <?php foreach($setting as $settings ){  ?>
                    <?php echo $settings['Setting']['address_eg'];?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="product-listitem" class="tintuc-home clearfix">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home"><span>
                        Bài viết mới
                    </span>
                </div>
            </div>
            <?php $hotnew = $this->requestAction('/comment/hotnew');?>
            <?php foreach($hotnew as $value){?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item">
                    <a href="<?php echo DOMAIN;?>more/<?php echo $value['News']['alias'];?>.html" title="<?php echo $value['News']['title'];?>">
                        <img src="<?php echo DOMAINAD.'timthumb.php?src='.$value['News']['images']?>&amp;w=400&amp;zc=1" alt="<?php echo $value['News']['title'];?>" />
                        <h4>
                            <?php echo $value['News']['title'];?>
                        </h4>
                    </a>
                    <p>
                        <?php echo strip_tags($this->Text->truncate( $value['News']['introduction'],150,array('ending' => '...','exact' => false)));?>
                    </p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- <section id="product-listitem" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="title-home"><span>
						Nhà phân phối chính thức</span>
				</div>
			</div>
			<?php $category = $this->requestAction('/comment/danhmuc');?>
			<?php foreach($category as $k=>$subcat){?>
			<div class="col-md-2 col-sm-2 col-xs-3">
				<div class="cate-home">
					<a href="<?php echo DOMAIN;?>product/<?php echo $subcat['Catproduct']['alias']?>.html" title="<?php echo $subcat['Catproduct']['name']?>"><img src="/admin/<?php echo $subcat['Catproduct']['img']?>">

						<div class="cate-home-text">
							<?php echo $subcat['Catproduct']['name']?></div>

					</a>
				</div>

				<?php $categorys = $this->requestAction('/comment/showsmenu1/'.$subcat['Catproduct']['id']);
                        if($categorys){?>
				<?php }?>
			</div>
			<?php }?>
		</div>
	</div>
</section> -->
<script type="text/javascript">
function imgt(i, id) {
    document.getElementById(i).src = "<?php echo DOMAIN;?>img/t/" + id;
}
</script>