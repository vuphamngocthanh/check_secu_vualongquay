<nav class="st-menu st-effect-3" id="cssmenu-st">
    <div class="list-group panel">
        <ul class="">
        <li><a href="<?php echo DOMAIN?>" target="_self">Trang chủ</a></li>
            <?php $root = $this->requestAction('/comment/menu');                                
             foreach ($root as $value){?>
            <?php if($value['Menu']['radio']==1){?>
            <li><a href="<?php echo $value['Menu']['link']?>"><span class="span-menu"></span><span>
                        <?php echo $value['Menu']['name']?></span></a>
                <?php $rootsp = $this->requestAction('/comment/rootmenu/'.$value['Menu']['id']);?>
                <?php if($rootsp){?>
                <span class="icon-open"></span>
                <ul class="sub-1">
                    <?php foreach ($rootsp as $value){?>
                    <li><a href="<?php echo $value['Menu']['link']?>"><span class="span-menu"></span>
                            <?php echo $value['Menu']['name']?></a></li>
                    <?php }?>
                </ul>
                <?php }?>
            </li>
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
                <span class="icon-open"></span>
                <ul class="sub-1">
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
                <span class="icon-open"></span>
                <ul class="sub-1">
                    <?php foreach ($rootsp as $value){?>
                    <li><a href="<?php echo DOMAIN?>more/<?php echo $value['Menu']['alias']?>.html"><span class="span-menu"></span>
                            <?php echo $value['Menu']['name']?></a></li>
                    <?php }?>
                </ul>
                <?php }?>
            </li>
            <?php }?>
            <?php }?>
            <li><a href="<?php echo DOMAIN?>lien-he.html"><span class="span-menu"></span>Liên hệ</a></li>
        </ul>
    </div>
</nav>
<script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("icon-open");
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