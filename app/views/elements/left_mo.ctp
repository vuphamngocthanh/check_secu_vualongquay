<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
    <div class="box-left category-left">
        <ul class="list_category">
            <?php $category = $this->requestAction('/comment/danhmuc');?>
            <?php foreach($category as $k=>$subcat){?>
            <li>
                <a href="<?php echo DOMAIN;?>product/<?php echo $subcat['Catproduct']['alias']?>.html" title="<?php echo $subcat['Catproduct']['name']?>"><img src="/admin/<?php echo $subcat['Catproduct']['images']?>"><i class="fa fa-angle-right"></i> <?php echo $subcat['Catproduct']['name']?></a>

                <?php $categorys = $this->requestAction('/comment/showsmenu1/'.$subcat['Catproduct']['id']);
                        if($categorys){?>
                <div class="box_megam box_megam_5">
                    <div class="block_menu">
                        <ul class="list_mega_menu">
                            <?php foreach($categorys as $k=>$subcats){?>
                            <li>
                                <a href="<?php echo DOMAIN;?>product/<?php echo $subcats['Catproduct']['alias']?>.html" title="<?php echo $subcats['Catproduct']['name']?>"><i class="fa fa-angle-right"></i> <?php echo $subcats['Catproduct']['name']?>
                                </a>
                                <?php $showsmenu1 = $this->requestAction('/comment/showsmenu1/'.$subcats['Catproduct']['id']);
                                            if($showsmenu1){?>

                                <div class="box_megam_level2">
                                    <ul class="list_mega_menu_level2">
                                        <?php foreach($showsmenu1 as $value){?>
                                        <li>
                                            <a href="<?php echo DOMAIN;?>product/<?php echo $value['Catproduct']['alias']?>.html" title="<?php echo $value['Catproduct']['name']?>"><i class="fa fa-angle-right"></i> <?php echo $value['Catproduct']['name']?>
                                            </a>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>

                                <?php }?>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </li>
            <?php }?>
            <?php }?>
        </ul>
    </div>
</div>