<section class="row-section top-menu" id="dmn">
    <div class="container">
        <div class="navigation">
            <div class="logo">
                <?php $banner = $this -> requestAction('/comment/banner');?>
                <?php foreach($banner as $banner){ ?>
                <a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAINAD?><?php echo $banner['Banner']['images'];?>" /></a>
                <?php }?>
            </div>
            <div class="hotline hidden-lg hidden-md">
                <?php $setting = $this->requestAction('/comment/setting'); ?>
                <?php foreach ($setting as $settings) { ?>
                <a href="tel:<?php echo $settings['Setting']['mobile'];?>">
                    <span class="fa fa-phone"></span>
                    <span>
                         GỌI HOTLINE
                        </span>
                </a>
                <?php }?>
            </div>
            <div id="st-trigger-effects" class="column hidden-lg hidden-md">
                <button data-effect="st-effect-3" class="fa fa-bars fa-lg"></button>
            </div>
            <div class="hidden-sm hidden-xs">
                <ul class="menutop">
                    <li><a href="<?php echo DOMAIN?>" target="_self">Trang chủ</a></li>
                    <?php $root = $this->requestAction('/comment/menu');                                
             foreach ($root as $value){?>
                    <?php if($value['Menu']['radio']==1){?>
                    <li><a href="<?php echo $value['Menu']['link']?>"><span class="span-menu"></span>
                            <?php echo $value['Menu']['name']?></a></li>
                    <?php }elseif($value['Menu']['radio']==2){?>
                    <?php if($value['Menu']['catp_parent_id']!=null){?>
                    <li><a href="<?php echo DOMAIN?>product/<?php echo $value['Menu']['alias']?>.html"><span class="span-menu"></span>
                            <?php echo $value['Menu']['name']?></a>
                        <?php }else{?>
                    <li><a href="<?php echo DOMAIN?>san-pham.html"><span class="span-menu"></span>
                            <?php echo $value['Menu']['name']?></a>
                        <?php }?>
                        <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);?>
                        <?php if($rootsp){?>
                        <ul class="sub-menu">
                            <?php foreach ($rootsp as $value){?>
                            <li><a href="<?php echo DOMAIN?>product/<?php echo $value['Menu']['alias']?>.html"><span class="span-menu"></span>
                                    <?php echo $value['Menu']['name']?></a></li>
                            <?php }?>
                        </ul>
                        <?php }?>
                    </li>
                    <?php }elseif($value['Menu']['radio']==3){?>
                    <li><a href="<?php echo DOMAIN?>new/<?php echo $value['Menu']['alias']?>.html"><span class="span-menu"></span>
                            <?php echo $value['Menu']['name']?></a>
                        <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);?>
                        <?php if($rootsp){?>
                        <ul class="sub-menu">
                            <?php foreach ($rootsp as $value){?>
                            <li><a href="<?php echo DOMAIN?>more/<?php echo $value['Menu']['alias']?>.html"><span class="span-menu"></span>
                                    <?php echo $value['Menu']['name']?></a></li>
                            <?php }?>
                        </ul>
                        <?php }?>
                    </li>
                    <?php }?>
                    <?php }?>
                    <li><a href="" data-toggle="modal" data-target="#formdathang1"><span class="span-menu"></span>Đặt hàng online</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
</script>
<script>
$(document).ready(function() {
    var url = document.URL;
    $("a[href='" + url + "'][level='" + 1 + "']").addClass('active');
});
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 33) {
            document.getElementById('dmn').className = "idmn";
            document.getElementById('u1').className = "u3";
        } else {
            document.getElementById('dmn').className = "dmn";
            document.getElementById('u1').className = "list_category menu-postion-1";
        }
    });
});;
</script>