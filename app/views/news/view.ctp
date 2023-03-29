<?php echo $this->element('left_mo');?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="clearfix">
                <section class="breadcrumbs clearfix">
                    <a title="Trang chủ" href="<?php echo DOMAIN;?>"><i class="fa fa-home"></i></a>
                    &nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">
                        <?php echo $views['News']['title']?></a>
                </section>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="post">
                <div class="postitem">
                    <h2><span>
                            <?php echo $views['News']['title']?></span></h2>
                    <div class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;
                        <?php echo date('d-m-Y', strtotime($views['News']['modified'])); ?>
                    </div>
                    <div>
                        <div class="addthis_native_toolbox"></div>
                    </div>
                </div>
                <?php echo $views['News']['content']?>
                <div class="fb-comments" data-href="<?php echo DOMAIN;?>more/<?php echo $views['News']['alias'];?>.html" data-width="100%" data-numposts="10"></div>
            </div>
            <div class="news">
                <h2><span>Bài viết liên quan</span>
                </h2>
                <?php if($list_other){?>
                <ul>
                    <?php foreach($list_other as $news){ ?>
                    <li>
                        <a title="<?php echo $news['News']['title']?>" href="<?php echo DOMAIN;?>more/<?php echo $news['News']['alias'];?>.html">
                            <img alt="<?php echo $news['News']['title']?>" src="<?php echo DOMAINAD.'timthumb.php?src='.$news['News']['images']?>&amp;w=400&amp;zc=1">
                            <h4>
                                <?php echo $news['News']['title']?>
                            </h4>
                        </a>
                        <span class="date">
                            <i class="fa fa-calendar-o"></i>
                            <?php echo date('d-m-Y', strtotime($news['News']['modified'])); ?> </span>
                    </li>
                    <?php } ?>
                </ul>
                <?php }?>
            </div>
        </div>
        <!--End listitem-->
    </div>
</div>