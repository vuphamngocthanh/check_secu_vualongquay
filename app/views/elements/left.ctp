<?php $root = $this->requestAction('/comment/danhmuc');											
   foreach ($root as $value){?>
<div class="boxmenuleftx">
    <h2><?php echo $value['Catproduct']['name']?></h2>
    <div class="cont-menuleft">
        <div class="arrowlistmenu">
            <?php $category = $this->requestAction('/comment/showsmenu1/'.$value['Catproduct']['id']);?>
            <?php foreach($category as $k=>$subcat){?>
            <h3 class="menuheader expandable">
                <a href="<?php echo DOMAIN;?>danh-sach/<?php echo $subcat['Catproduct']['id']?>/<?php echo $subcat['Catproduct']['alias']?>.html" title="<?php echo $subcat['Catproduct']['name']?>"> » <?php echo $subcat['Catproduct']['name']?></a>
            </h3>
            <?php $categorys = $this->requestAction('/comment/showsmenu1/'.$subcat['Catproduct']['id']);
            if($categorys){?>
            <ul class="categoryitems">
                <?php foreach($categorys as $k=>$subcats){?>
                <li>
                    <a href="<?php echo DOMAIN;?>danh-sach/<?php echo $subcats['Catproduct']['id']?>/<?php echo $subcats['Catproduct']['alias']?>.html" title="<?php echo $subcats['Catproduct']['name']?>"><?php echo $subcats['Catproduct']['name']?></a>
                </li>
                <?php }?>
            </ul>
            <?php }?>
            <?php }?>
        </div>
    </div>
</div>
<?php }?>
<!--Box lien ket web-->
<!-- ho tro truc tuyen-->
<div class="boxhotro">
    <h2>Hỗ trợ trực tuyến</h2>
    <div class="bghotrott"></div>
    <?php $setting = $this->requestAction('/comment/setting') ?>
    <?php foreach($setting as $settings ){  ?>
    <p class="hotline">Hotline : <?php echo $settings['Setting']['mobile'];?></p>
    <?php }?>
    <?php $support = $this->requestAction('/comment/helpsonline') ?>
    <?php  foreach($support as $itm ){?>
    <?php if($itm['Helps']['user_yahoo']){?>
    <p class="yahoohotro"><strong> <a title="Hỗ trợ trực tuyến" href="ymsgr:SendIM?<?php echo $itm['Helps']['user_yahoo']?>"> <img alt="Hỗ trợ trực tuyến" src="http://opi.yahoo.com/online?u=<?php echo $itm['Helps']['user_yahoo']?>&m=g&t=5" /> </a></strong> <span><?php echo $itm['Helps']['title']?></span></p>
    <?php }?>
    <?php if($itm['Helps']['user_skype']){?>
    <p class="yahoohotro"><strong><a title="Hỗ trợ trực tuyến" href="skype:<?php echo $itm['Helps']['user_skype']?>?chat"><img src="<?php echo DOMAIN;?>themes/view/images/skype.jpg" title="Hỗ trợ trực tuyến" /></a></strong> <span><?php echo $itm['Helps']['title']?></span></p>
    <?php }}?>
    <?php $setting = $this->requestAction('/comment/setting') ?>
    <?php foreach($setting as $settings ){  ?>
    <p class="emailinfo">Email : <?php echo $settings['Setting']['email'];?> <br />Phone : <?php echo $settings['Setting']['phone'];?></p>
    <?php }?>
</div>
<div class="boxmenuleftx">
    <h2>Fanpage</h2>
    <div class="cont-adleft">
        <?php $setting = $this->requestAction('/comment/setting') ?>
        <?php foreach($setting as $settings ){ 
            if($settings['Setting']['fanpage']){?>
        <iframe src="//www.facebook.com/plugins/likebox.php?href=<?php echo $settings['Setting']['fanpage'];?>&amp;width=180&amp;height=320&amp;colorscheme=light&amp;show_faces=true&amp;show_border=false&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:320px;" allowTransparency="true"></iframe>
        <?php }else{?>
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/ctybkns&amp;width=180&amp;height=320&amp;colorscheme=light&amp;show_faces=true&amp;show_border=false&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:320px;" allowTransparency="true"></iframe>
        <?php }?>
        <?php }?>

    </div>
</div>
<!--End ho tro truc tuyen-->
<div class="boxmenuleftx">
    <h2>Nhà cung cấp</h2>
    <div class="cont-adleft" style="text-align: center;">
        <?php $advf= $this->requestAction('/comment/advf') ?>
        <?php foreach($advf as $advs1 ){  ?>
        <a href="<?php echo $advs1['Advertisement']['link'] ?>"><img src="<?php echo DOMAINAD.$advs1['Advertisement']['images']?>" width="181" /><br /><b><?php echo $advs1['Advertisement']['name'] ?></b></a>
        <br />
        <?php }?>
    </div>
</div>
<!--End Box lien ket web-->