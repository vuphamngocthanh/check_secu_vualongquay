<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta property="fb:app_id" content="" />
<?php $setting = $this->requestAction('/comment/setting'); ?>
<?php foreach ($setting as $settings) { ?>
<link href="https://plus.google.com/u/2/115144298026826199402/posts" rel="publisher" />
<link href="https://plus.google.com/u/2/115144298026826199402/about" rel="author" />
<link href="http://<?php echo $settings['Setting']['url']; ?>/feed" title="<?php echo
    $settings['Setting']['title']; ?> » Feed" type="application/rss+xml" rel="alternate"/>
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
<?php $setting = $this -> requestAction('/comment/setting');?>
<?php foreach($setting as $settings){?>
<link href="http://<?php echo $settings['Setting']['url'];?>/feed" title="<?php echo $settings['Setting']['title'];?> » Feed" type="application/rss+xml" rel="alternate"/>
<link href="http://<?php echo $settings['Setting']['url'];?>/comments/feed" title="<?php echo $settings['Setting']['title'];?> » Comments Feed" type="application/rss+xml" rel="alternate"/>
<link href="http://<?php echo $settings['Setting']['url'];?>" title="<?php echo $settings['Setting']['title'];?>" rel="index">
<meta content="<?php echo $settings['Setting']['keyword'];?>" name="keywords"/>
<meta content="<?php echo $settings['Setting']['description'];?>" name="description"/>
<?php if($session->read('lang')==1){?>
<title><?php echo $settings['Setting']['title'];?></title>
             <?php } if($session->read('lang')==2){?>
<title><?php echo $settings['Setting']['title_en'];?></title>
             <?php }?>

<?php }?>
<meta content="noodp,noydir" name="robots"/>
<link href="<?php echo DOMAIN ?>images/logo.png" type="images/png" rel="icon"/>
<link rel="stylesheet" href="<?php echo DOMAIN ?>themes/view/css/css.css" type="text/css" />
<link rel="stylesheet" href="<?php echo DOMAIN ?>themes/view/csjquerrymenu/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo DOMAIN ?>themes/view/csjquerrymenu/script.js"></script>
<script type="text/javascript" src="<?php echo DOMAIN ?>themes/view/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo DOMAIN ?>themes/view/js/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({ //top level headers initialization
	headerclass: "expandable", //Shared CSS class name of headers group that are expandable
	contentclass: "categoryitems", //Shared CSS class name of contents group
	revealtype: "clickgo", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

ddaccordion.init({ //2nd level headers initialization
	headerclass: "subexpandable", //Shared CSS class name of sub headers group that are expandable
	contentclass: "subcategoryitems", //Shared CSS class name of sub contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["opensubheader", "closedsubheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]

	togglehtml: ["none", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

</script>
<script src="<?php echo DOMAIN ?>js/floater_xlib.js" type="text/javascript"></script>
<script type="text/javascript">

var slideTime = 700;
var floatAtBottom = false;

function pepsi_floating_init()
{
	xMoveTo('floating_banner_right', 887 - (1024-screen.width), 0);

	winOnResize(); // set initial position
	xAddEventListener(window, 'resize', winOnResize, false);
	xAddEventListener(window, 'scroll', winOnScroll, false);
}
function winOnResize() {
	checkScreenWidth();
	winOnScroll(); // initial slide
}
function winOnScroll() {
  var y = xScrollTop();
  if (floatAtBottom) {
    y += xClientHeight() - xHeight('floating_banner_left');
  }
  
  xSlideTo('floating_banner_left', (screen.width - (1050-772) - 740)/2-115 , y, slideTime);  // Chỉnh khoảng cách bên trái
  xSlideTo('floating_banner_right', (screen.width - (530-795) + 710)/2, y, slideTime); // // Chỉnh khoảng cách bên Phải
}
	
function checkScreenWidth()
{
	if( document.body.clientWidth <= 1024 )
	{	
		document.getElementById('floating_banner_left').style.display = 'none';
		document.getElementById('floating_banner_right').style.display = 'none';
	}
	else
	{
		document.getElementById('floating_banner_left').style.display = '';
		document.getElementById('floating_banner_right').style.display = '';	
	}
}

</script>
<!--<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-506cfe4c10cc5d40"></script>
-->

</head>