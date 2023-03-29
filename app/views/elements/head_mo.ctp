<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="fb:app_id" content="" />
<?php $setting = $this->requestAction('/comment/setting'); ?>
<?php foreach ($setting as $settings) { ?>

<link href="http://<?php echo $settings['Setting']['url']; ?>" title="<?php echo
    $settings['Setting']['title']; ?>" rel="index">
    <?php if($this->params['controller']=='home'){?>
    <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
    <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
    <title><?php echo $settings['Setting']['title']; ?></title>
    <?php }?>    
    <?php if($this->params['controller']=='products'){?>
        <?php if(isset($cat)){?>
            <?php if($cat['Catproduct']['meta_key']) {?>
                <meta content="<?php echo $cat['Catproduct']['meta_key'];?>" name="keywords"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
            <?php }?>
            
            <?php if($cat['Catproduct']['meta_key']) {?>
                <meta content="<?php echo $cat['Catproduct']['meta_des'];?>" name="description"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
            <?php }?>
            
            <?php if($cat['Catproduct']['meta_key']) {?>
                <title><?php echo $cat['Catproduct']['title_seo'];?></title>
            <?php }else{?>
                <title><?php echo $cat['Catproduct']['name'];?></title>
            <?php }?>
        <?php }else{?>
            <?php if(isset($views)){?>
                 <?php if(isset($views['Product']['meta_key'])) {?>
                <meta content="<?php echo $views['Product']['meta_key'];?>" name="keywords"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
                <?php }?>
                
                <?php if(isset($views['Product']['meta_des'])) {?>
                <meta content="<?php echo $views['Product']['meta_des'];?>" name="description"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
                <?php }?>
                
                <?php if(isset($views['Product']['title_seo'])) {?>
                <title><?php echo $views['Product']['title_seo'];?></title>
                <?php }else{?>
                <title><?php echo $views['Product']['title'];?></title>
                <?php }?>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
                <title>Sản phẩm</title>
            <?php }?>
        <?php }?>
    <?php }?><!--end seo product-->
    
    <?php if($this->params['controller']=='news'){?>
        <?php if(isset($cat)){?>
            <?php if($cat['Category']['meta_key']) {?>
                <meta content="<?php echo $cat['Category']['meta_key'];?>" name="keywords"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
            <?php }?>
            
            <?php if($cat['Category']['meta_key']) {?>
                <meta content="<?php echo $cat['Category']['meta_des'];?>" name="description"/>
            <?php }else{?>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
            <?php }?>
            
            <?php if($cat['Category']['meta_key']) {?>
                <title><?php echo $cat['Category']['title_seo'];?></title>
            <?php }else{?>
                <title><?php echo $cat['Category']['name'];?></title>
            <?php }?>
        <?php }else{?>
            <?php if(isset($views)){?>
                 <?php if($views['News']['meta_key']) {?>
                <meta content="<?php echo $views['News']['meta_key'];?>" name="keywords"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>   
                <?php }?>
                
                <?php if($views['News']['meta_des']) {?>
                <meta content="<?php echo $views['News']['meta_des'];?>" name="description"/>
                <?php }else{?>
                    <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>   
                <?php }?>
                
                <?php if($views['News']['title_seo']) {?>
                <title><?php echo $views['News']['title_seo'];?></title>
                <?php }else{?>
                <title><?php echo $views['News']['title'];?></title>
                <?php }?>
            <?php }else{?>
                <?php if($cats){?>
                <title><?php echo $cats;?></title>
                <?php }?>
                <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
                <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
            
            <?php }?>
        <?php }?>
    <?php }?><!--end seo news-->
    
    <?php if($this->params['controller']=='contacts'){?>
        <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
        <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
        <title>Liên hệ</title>
    <?php }?>
     <?php if($this->params['controller']=='introductions'){?>
        <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
        <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
        <title>Giới thiệu</title>
    <?php }?>
    <?php if($this->params['controller']=='commentdvs'){?>
        <meta content="<?php echo $settings['Setting']['keyword']; ?>" name="keywords"/>
        <meta content="<?php echo $settings['Setting']['description']; ?>" name="description"/>
        <title>Phản hồi dịch vụ</title>
    <?php }?>
    
<?php } ?>    
<meta content="noodp,noydir" name="robots"/>
<link href="<?php echo DOMAIN ?>images/logo.png" type="images/png" rel="icon"/>
<!-- Bootstrap -->
<link href="<?php echo DOMAIN ?>templates/t1-23/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php echo DOMAIN ?>templates/t1-23/css/font-awesome.min.css" rel="stylesheet">
<!-- Style -->
<link href="<?php echo DOMAIN ?>templates/t1-23/css/reset.css" rel="stylesheet">
<link href="<?php echo DOMAIN ?>templates/t1-23/css/style.css" rel="stylesheet">
<link href="<?php echo DOMAIN ?>templates/t1-23/css/fonts.css" rel="stylesheet">
<!-- Style Responsive -->
<link href="<?php echo DOMAIN ?>templates/t1-23/css/style-responsive.css" rel="stylesheet">
<!-- owl Slider -->
<link href="<?php echo DOMAIN ?>templates/t1-23/css/slider.css" rel="stylesheet">
<!-- SLIDER REVOLUTION Main Slider -->
<link href="<?php echo DOMAIN ?>templates/t1-23/css/captions.css" rel="stylesheet">
<link href="<?php echo DOMAIN ?>templates/t1-23/css/settings.css" rel="stylesheet">
<link href="<?php echo DOMAIN ?>profiles/demot123web4svn/cache/custom.css" rel="stylesheet">
<link href="<?php echo DOMAIN ?>templates/t1-23/css/magnific-popup.css" rel="stylesheet">
<!-- Load jQuery Library -->
<script src="<?php echo DOMAIN ?>templates/t1-23/js/jquery-1.11.min.js"></script>
<script src="<?php echo DOMAIN ?>templates/t1-23/js/owl.carousel.js"></script>
<script src="<?php echo DOMAIN ?>templates/t1-23/js/jquery.validate.js"></script>
<script src="<?php echo DOMAIN ?>templates/t1-23/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-544b19c31951d4f1" async></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180224166-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180224166-1');
</script>
	
</head>