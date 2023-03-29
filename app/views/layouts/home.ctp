<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<?php echo $this->element('head_mo');?>

<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
           <?php echo $this->element('menu_canvas');?>
            <!-------Menu reponsive--->
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="main clearfix">
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-md" style="height: 30px;">
                            <div class="container">
                                <div class="top-mobi">
                                    <div id="st-trigger-effects" class="column ">
                                        <button data-effect="st-effect-3" class="fa fa-bars fa-lg"></button>
                                    </div>
                                    <div class="hotline-top">
                                        <ul class="ul-language">
                                            <div id="flags" class="size22">
                                                <ul id="sortable" class="ui-sortable" style="float:left">
                                                    <li id='English'><a title='English' class='notranslate flag en'></a></li>
                                                    <li id='Vietnamese'><a title='Vietnamese' class='notranslate flag vi'></a></li>
                                                </ul>
                                            </div>
                                            <div id="google_language_translator"></div>
                                            <script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit'></script>
                                        </ul>
                                    </div>
                                    <div class="hotline-top">
                                    	<a href="<?php echo DOMAIN;?>xem-gio-hang">
                                        <span><img style="width: 20px;" src="<?php echo DOMAIN;?>images/cart_bg.png" /> </span> <b></b><span> Giỏ hàng: </span>
                                        <span class="sodienthoai">
                                            <?php if(isset($shopingcart)){echo count($shopingcart);}else{echo '0';}?></span>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <?php echo $this->element('header_mo');?>
                        <?php echo $this->element('menu_mo');?>
                        <?php if($this->params['controller']=='home'){?>
                        <?php echo $this->element('slide');?>
                        <?php echo $content_for_layout; ?>
                        <?php }else{?>
                        <div class="main-wrap">
                            <div class="container">
                                <div class="row">
                                    <?php echo $content_for_layout; ?>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php echo $this->element('footer_mo');?>
                        <!-- /main -->
                    </div>
                    <!-- /st-content-inner -->
                </div>
                <!-- /st-content -->
            </div>
            <!-- /st-pusher -->
        </div>
        <!-- /st-container -->
        <!-- Load main.js-->
        <script src="<?php echo DOMAIN;?>templates/t1-23/js/main.js"></script>
        <!-- OWL Carousel jquery -->
        <!--end id=page-->
        <div id="fb-root"></div>
        <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="<?php echo DOMAIN;?>profiles/demot123web4svn/cache/custom.js"></script>
</body>

</html>