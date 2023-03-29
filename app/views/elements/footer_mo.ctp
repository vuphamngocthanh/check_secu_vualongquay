<footer>
    <div class="footer-link">
        <div class="container">
            <?php $setting = $this->requestAction('/comment/setting') ?>
            <?php foreach($setting as $settings ){  ?>
            <?php echo $settings['Setting']['chinhsach'];?>
            <?php }?>
        </div>
    </div>
    <div class="footer-address">
        <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <div class="logo-footer">
                    <?php $banner = $this -> requestAction('/comment/banner');?>
                    <?php foreach($banner as $banner){ ?>
                    <a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAINAD?><?php echo $banner['Banner']['images'];?>" /></a>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 address">
                <?php $setting = $this->requestAction('/comment/setting') ?>
                <?php foreach($setting as $settings ){  ?>
                <?php echo $settings['Setting']['footer'];?>
                <?php }?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthuonghieuvualonquay&tabs&width=340&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>
</footer>
<div id="formdathang1" class="modal fade form-dathang " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đặt Giao Hàng</h4>
            </div>
            <div class="modal-body">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfiPKOHuwbrRdgDE-zRB-JEt_xyiSENNxr55fqPw4h-krmdHw/viewform?embedded=true" width="640" height="1070" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
            </div>
            <!--             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<div id="formdathang2" class="modal fade form-dathang " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đặt Pickup (Nhận tại điểm bán)</h4>
            </div>
            <div class="modal-body">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeECmxz2C2fho48kYY1GV5KGxAk_3WNESKaAQFmMTT4-Ge-Sw/viewform?embedded=true" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
            </div>
            <!--             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<div id="formdathang3" class="modal fade form-dathang " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đặt hàng qua App</h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAIN;?>images/app1.png" /></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAIN;?>images/app2.png" /></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAIN;?>images/app3.png" /></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAIN;?>images/app4.png" /></a>
                </div>
            </div>
            <!--             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<?php $setting = $this->requestAction('/comment/setting') ?>
<?php foreach($setting as $settings ){  ?>
<div class="contact-home">
    <div class="contact-item">
        <a class="contact-icon fb-mess" target="_blank" href="https://m.me/thuonghieuvualonquay"><svg class="svg-messenger-120" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="60" cy="60" r="60" fill="#C4C4C4"></circle>
                                    <circle cx="60" cy="60" r="60" fill="url(#paint0_messenger_120_linear_msg)"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M60 32C44.536 32 32 43.6074 32 57.9259C32 66.0848 36.0716 73.3624 42.4348 78.1148V88L51.9685 82.7677C54.5129 83.4718 57.2083 83.8519 60 83.8519C75.464 83.8519 88 72.2445 88 57.9259C88 43.6074 75.464 32 60 32ZM62.7826 66.9136L55.6522 59.3086L41.7391 66.9136L57.0435 50.6667L64.3478 58.2716L78.087 50.6667L62.7826 66.9136Z" fill="url(#paint1_messenger_120_linear_msg)"></path>
                                    <defs>
                                        <linearGradient id="paint0_messenger_120_linear_msg" x1="56.6667" y1="0" x2="56.6667" y2="120" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#01ADFF"></stop>
                                            <stop offset="1" stop-color="#006FFF"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint1_messenger_120_linear_msg" x1="60" y1="32" x2="60" y2="88" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                            <stop offset="1" stop-color="#F7F3F2"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg></a>
    </div>
    <!-- <div class="contact-item">
        <a class="contact-icon zl-mess" target="_blank" href="http://zalo.me/<?php echo $settings['Setting']['mobile'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.24" fill-rule="evenodd" clip-rule="evenodd" d="M19.26 2.61429H4.71429C3.19946 2.61429 1.97144 3.84231 1.97144 5.35715V18.96C1.97144 20.4748 3.19946 21.7029 4.7143 21.7029H19.26C20.7748 21.7029 22.0029 20.4748 22.0029 18.96V5.35715C22.0029 3.84231 20.7748 2.61429 19.26 2.61429ZM4.71429 2.35715C3.05744 2.35715 1.71429 3.70029 1.71429 5.35715V18.96C1.71429 20.6169 3.05744 21.96 4.7143 21.96H19.26C20.9169 21.96 22.26 20.6169 22.26 18.96V5.35715C22.26 3.70029 20.9169 2.35715 19.26 2.35715H4.71429Z" fill="#333333"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.76817 21.9497C7.16225 21.9455 7.55616 21.9414 7.94962 21.9414C7.94903 21.9371 7.94835 21.933 7.94758 21.9289C7.94836 21.9329 7.94904 21.937 7.94964 21.9412C8.03935 21.9412 8.12906 21.9456 8.21877 21.9546H14.7005C15.2388 21.9546 15.777 21.9556 16.3153 21.9566C17.3919 21.9586 18.4684 21.9606 19.545 21.9546H19.5674C21.0656 21.9412 22.2677 20.7211 22.2588 19.2229V16.5988C22.2588 16.5825 22.2599 16.5623 22.2611 16.5411C22.2649 16.4752 22.2692 16.3999 22.2408 16.4015C22.1601 16.4059 22.0328 16.4348 21.9879 16.4796C21.6439 16.709 21.3103 16.9594 20.9767 17.2099C20.3095 17.7109 19.6423 18.2118 18.8917 18.5437C15.9708 19.5291 13.3874 19.5758 10.6455 18.9134C10.4954 18.8588 10.424 18.8649 10.2972 18.8758C10.2155 18.8828 10.1108 18.8918 9.94727 18.8878L9.88519 18.8898C9.61469 18.8982 9.22197 18.9104 8.75256 19.196C7.65358 19.5324 6.16307 19.5758 5.39283 19.4606C5.39609 19.468 5.39817 19.4744 5.39979 19.4803L5.39282 19.4653C5.38211 19.4532 5.3686 19.4426 5.35551 19.4323C5.31373 19.3993 5.27624 19.3698 5.34796 19.3083C5.36889 19.2948 5.38983 19.2809 5.41076 19.2669C5.45262 19.239 5.49449 19.2111 5.53636 19.1872C6.12397 18.8059 6.6757 18.3888 7.03904 17.7742C7.53298 17.1753 7.30402 16.9418 6.86756 16.4966L6.85111 16.4798C4.72468 14.31 4.09897 12.0076 4.32075 8.91063C4.58541 7.21058 5.3659 5.74827 6.49179 4.47435C7.1736 3.70282 7.9855 3.07932 8.87365 2.55899C8.88647 2.55083 8.90141 2.54419 8.91666 2.53741C8.9601 2.51808 9.00607 2.49764 9.01271 2.43788C9.01795 2.39067 8.94214 2.37508 8.91522 2.37508C8.40904 2.37508 7.90939 2.37056 7.41206 2.36605C6.42418 2.3571 5.44547 2.34824 4.44299 2.37509C3.00311 2.41546 1.69084 3.40713 1.71461 5.17411C1.72059 8.29627 1.7186 11.4164 1.71661 14.5359C1.71561 16.0954 1.71461 17.6548 1.71461 19.2141C1.71461 20.663 2.82256 21.8786 4.27141 21.9369C5.10253 21.9673 5.93572 21.9585 6.76817 21.9497ZM5.44976 19.5633L5.4601 19.5774C5.53529 19.6441 5.60991 19.7115 5.68409 19.7793C5.61213 19.7105 5.5378 19.6417 5.46012 19.5728L5.44976 19.5633ZM7.74593 21.718C7.72097 21.7016 7.69694 21.684 7.67601 21.6631L7.67007 21.6618L7.67599 21.6677C7.69693 21.6867 7.72096 21.7027 7.74593 21.718ZM9.3237 11.902H9.32402C9.75697 11.901 10.1775 11.9 10.5962 11.903C10.9505 11.9075 11.1434 12.0555 11.1793 12.3381C11.2197 12.6924 11.0133 12.9302 10.6276 12.9347C10.0827 12.9414 9.54035 12.9406 8.99674 12.9397H8.99673C8.81536 12.9394 8.63384 12.9392 8.45204 12.9392C8.39165 12.9392 8.33163 12.9399 8.27176 12.9406C8.12264 12.9425 7.97449 12.9443 7.82406 12.9347C7.56389 12.9212 7.30822 12.8674 7.18262 12.5982C7.05702 12.3291 7.14673 12.0869 7.31719 11.8671C8.00797 10.9879 8.70324 10.1043 9.39851 9.22507L9.39852 9.22505L9.39853 9.22504C9.43889 9.17123 9.47925 9.11741 9.51962 9.06808C9.48657 9.0119 9.44379 9.01658 9.40204 9.02115C9.38711 9.02278 9.37231 9.0244 9.35813 9.02322C9.11591 9.02098 8.87257 9.02098 8.62922 9.02098C8.38588 9.02098 8.14254 9.02098 7.90031 9.01873C7.78817 9.01873 7.67603 9.00528 7.56838 8.98285C7.3127 8.92454 7.1557 8.66886 7.21402 8.41766C7.25439 8.24721 7.38896 8.10816 7.55941 8.06779C7.66706 8.04087 7.7792 8.02742 7.89134 8.02742C8.68978 8.02293 9.4927 8.02293 10.2911 8.02742C10.4347 8.02293 10.5737 8.04087 10.7128 8.07676C11.0178 8.17993 11.1479 8.46252 11.0268 8.75857C10.9191 9.01425 10.7487 9.23404 10.5782 9.45384C9.99061 10.2029 9.40299 10.9475 8.81538 11.6877C8.76604 11.746 8.72118 11.8043 8.64941 11.903C8.87832 11.903 9.10262 11.9025 9.3237 11.902ZM13.8527 9.54326C13.9604 9.40421 14.0725 9.27412 14.2565 9.23824C14.6108 9.16647 14.9428 9.39524 14.9472 9.75409C14.9607 10.6512 14.9562 11.5483 14.9472 12.4455C14.9472 12.6787 14.7947 12.8851 14.5749 12.9524C14.3507 13.0376 14.095 12.9703 13.9469 12.7774C13.8707 12.6832 13.8393 12.6653 13.7316 12.7505C13.3234 13.0824 12.8614 13.1408 12.3635 12.9793C11.5651 12.7191 11.2376 12.0956 11.1479 11.3375C11.0537 10.5166 11.3273 9.81689 12.063 9.38627C12.673 9.02293 13.292 9.05433 13.8527 9.54326ZM13.0947 10.1936C13.1622 10.1965 13.2284 10.209 13.2912 10.2305C13.4264 10.2742 13.5466 10.3605 13.633 10.4808C13.8841 10.8217 13.8841 11.3824 13.633 11.7233C13.5881 11.7816 13.5388 11.8309 13.4849 11.8713C13.3474 11.9731 13.1861 12.0202 13.0273 12.0167C12.8773 12.0146 12.7265 11.9672 12.5968 11.8712C12.5429 11.8308 12.4936 11.7815 12.4487 11.7232C12.3366 11.5662 12.2738 11.3778 12.2648 11.1804C12.2603 10.548 12.6057 10.1667 13.0947 10.1936ZM16.9613 11.2074C16.9254 10.0546 17.6835 9.19338 18.76 9.16198C19.9039 9.1261 20.7382 9.89314 20.7741 11.0146C20.81 12.1494 20.1147 12.9524 19.0426 13.06C17.8719 13.1766 16.9433 12.3289 16.9613 11.2074ZM18.0872 11.0997C18.0872 11.0855 18.0874 11.0715 18.0878 11.0576C18.1034 10.5584 18.3948 10.2218 18.8153 10.1981C18.847 10.1963 18.8794 10.1963 18.9125 10.1981C19.1234 10.2026 19.3207 10.3102 19.4463 10.4807C19.4638 10.504 19.4801 10.5284 19.4952 10.5538C19.591 10.7147 19.6386 10.9136 19.6375 11.1122C19.6366 11.3372 19.5737 11.5615 19.4481 11.7284L19.4418 11.7367L19.4412 11.7375C19.3538 11.8479 19.2406 11.9264 19.1167 11.9713C18.9549 12.0314 18.7787 12.031 18.6195 11.975C18.544 11.9488 18.4717 11.9098 18.4057 11.8578C18.3569 11.8223 18.3169 11.7781 18.2814 11.7295L18.2801 11.7278C18.1456 11.544 18.0783 11.3244 18.0872 11.1002L18.0872 11.0997ZM16.5666 10.3148C16.5666 10.5466 16.5671 10.7783 16.5675 11.0101C16.5685 11.4736 16.5695 11.9371 16.5666 12.4006C16.571 12.7191 16.3198 12.9838 16.0014 12.9927C15.9475 12.9927 15.8892 12.9882 15.8354 12.9748C15.6111 12.9165 15.4407 12.6787 15.4407 12.3961V8.83004C15.4407 8.7596 15.4402 8.68966 15.4397 8.61989C15.4387 8.48083 15.4377 8.34244 15.4407 8.20205C15.4451 7.85666 15.6649 7.63238 15.9969 7.63238C16.3378 7.62789 16.5666 7.85217 16.5666 8.21103C16.5695 8.67764 16.5685 9.14625 16.5675 9.6142V9.61437C16.567 9.84812 16.5666 10.0817 16.5666 10.3148Z" fill="#333333"></path>
            </svg></a>
    </div>
    <div class="contact-item">
        <a class="contact-icon in-mess" target="_blank" href="<?php echo $settings['Setting']['file'];?>"><i class="fa fa fa-youtube-play"></i></a>
    </div> -->
</div>
<a href="link liên kết" class="fancybox"><a href="tel:<?php echo $settings['Setting']['mobile'];?>" class="fancybox">
        <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon">
            <div class="coccoc-alo-ph-circle"></div>
            <div class="coccoc-alo-ph-circle-fill"></div>
            <div class="coccoc-alo-ph-img-circle"></div>
            <!-- <div class="sodt">
                <?php echo $settings['Setting']['mobile'];?>
            </div> -->
        </div>
    </a>
    <?php }?>
    <style>
    @import url("//fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,300,600,700&subset=latin,vietnamese");

    .coccoc-alo-phone {
        position: fixed;
        visibility: hidden;
        background-color: transparent;
        width: 200px;
        height: 200px;
        cursor: pointer;
        z-index: 200000 !important;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -webkit-transition: visibility .5s;
        -moz-transition: visibility .5s;
        -o-transition: visibility .5s;
        transition: visibility .5s;
        left: -30px;
        bottom: 0px;
    }

    .sodt {
        position: absolute;
        bottom: 38px;
        left: 37px;
        font-size: 18px;
        color: #ff0000;
        font-weight: 500;
        background: #fff;
        padding: 3px 5px;
        border-radius: 3px;
    }

    .coccoc-alo-phone.coccoc-alo-show {
        visibility: visible
    }

    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @-webkit-keyframes fadeInRightBig {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @-webkit-keyframes fadeOutRight {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    .fadeOutRight {
        -webkit-animation-name: fadeOutRight;
        animation-name: fadeOutRight
    }

    .coccoc-alo-phone.coccoc-alo-static {
        opacity: .6
    }

    .coccoc-alo-phone.coccoc-alo-hover,
    .coccoc-alo-phone:hover {
        opacity: 1
    }

    .coccoc-alo-ph-circle {
        width: 160px;
        height: 160px;
        top: 20px;
        left: 20px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        border: 2px solid #bfebfc 9;
        opacity: .1;
        -webkit-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -moz-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -ms-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -o-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .coccoc-alo-phone.coccoc-alo-active .coccoc-alo-ph-circle {
        -webkit-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important
    }

    .coccoc-alo-phone.coccoc-alo-static .coccoc-alo-ph-circle {
        -webkit-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important
    }

    .coccoc-alo-phone.coccoc-alo-hover .coccoc-alo-ph-circle,
    .coccoc-alo-phone:hover .coccoc-alo-ph-circle {
        border-color: #00aff2;
        opacity: .5
    }

    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-circle,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-circle {
        border-color: #75eb50;
        border-color: #baf5a7 9;
        opacity: .5
    }

    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle {
        border-color: #F20000;
        border-color: #bfebfc 9;
        opacity: .5
    }

    .coccoc-alo-phone.coccoc-alo-gray.coccoc-alo-hover .coccoc-alo-ph-circle,
    .coccoc-alo-phone.coccoc-alo-gray:hover .coccoc-alo-ph-circle {
        border-color: #ccc;
        opacity: .5
    }

    .coccoc-alo-phone.coccoc-alo-gray .coccoc-alo-ph-circle {
        border-color: #75eb50;
        opacity: .5
    }

    .coccoc-alo-ph-circle-fill {
        width: 100px;
        height: 100px;
        top: 50px;
        left: 50px;
        position: absolute;
        background-color: #000;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .1;
        -webkit-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -moz-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -ms-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -o-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .coccoc-alo-phone.coccoc-alo-active .coccoc-alo-ph-circle-fill {
        -webkit-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important
    }

    .coccoc-alo-phone.coccoc-alo-static .coccoc-alo-ph-circle-fill {
        -webkit-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        opacity: 0 !important
    }

    .coccoc-alo-phone.coccoc-alo-hover .coccoc-alo-ph-circle-fill,
    .coccoc-alo-phone:hover .coccoc-alo-ph-circle-fill {
        background-color: rgba(0, 175, 242, 0.5);
        background-color: #00aff2 9;
        opacity: .75 !important
    }

    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-circle-fill,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-circle-fill {
        background-color: rgba(117, 235, 80, 0.5);
        background-color: #baf5a7 9;
        opacity: .75 !important
    }

    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle-fill {
        background-color: rgba(242, 223, 0, 0.85);
        background-color: #a6e3fa 9;
        opacity: .75 !important
    }

    .coccoc-alo-phone.coccoc-alo-gray.coccoc-alo-hover .coccoc-alo-ph-circle-fill,
    .coccoc-alo-phone.coccoc-alo-gray:hover .coccoc-alo-ph-circle-fill {
        background-color: rgba(204, 204, 204, 0.5);
        background-color: #ccc 9;
        opacity: .75 !important
    }

    .coccoc-alo-phone.coccoc-alo-gray .coccoc-alo-ph-circle-fill {
        background-color: rgba(117, 235, 80, 0.5);
        opacity: .75 !important
    }

    .coccoc-alo-ph-img-circle {
        width: 60px;
        height: 60px;
        top: 70px;
        left: 70px;
        position: absolute;
        background: rgba(30, 30, 30, 0.1) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==") no-repeat center center;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .7;
        -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .coccoc-alo-phone.coccoc-alo-active .coccoc-alo-ph-img-circle {
        -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important
    }

    .coccoc-alo-phone.coccoc-alo-static .coccoc-alo-ph-img-circle {
        -webkit-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important
    }

    .coccoc-alo-phone.coccoc-alo-hover .coccoc-alo-ph-img-circle,
    .coccoc-alo-phone:hover .coccoc-alo-ph-img-circle {
        background-color: #00aff2
    }

    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-img-circle,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-img-circle {
        background-color: #75eb50;
        background-color: #75eb50 9
    }

    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-img-circle {
        background-color: #00aff2;
        background-color: #F20000
    }

    .coccoc-alo-phone.coccoc-alo-gray.coccoc-alo-hover .coccoc-alo-ph-img-circle,
    .coccoc-alo-phone.coccoc-alo-gray:hover .coccoc-alo-ph-img-circle {
        background-color: #ccc
    }

    .coccoc-alo-phone.coccoc-alo-gray .coccoc-alo-ph-img-circle {
        background-color: #75eb50
    }

    @-moz-keyframes coccoc-alo-circle-anim {
        0% {
            -moz-transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1;
            -moz-opacity: .1;
            -webkit-opacity: .1;
            -o-opacity: .1
        }

        30% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5;
            -moz-opacity: .5;
            -webkit-opacity: .5;
            -o-opacity: .5
        }

        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg);
            opacity: .6;
            -moz-opacity: .6;
            -webkit-opacity: .6;
            -o-opacity: .1
        }
    }

    @-webkit-keyframes coccoc-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            -webkit-opacity: .1
        }

        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            -webkit-opacity: .5
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: .1
        }
    }

    @-o-keyframes coccoc-alo-circle-anim {
        0% {
            -o-transform: rotate(0) kscale(.5) skew(1deg);
            -o-opacity: .1
        }

        30% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            -o-opacity: .5
        }

        100% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            -o-opacity: .1
        }
    }

    @-moz-keyframes coccoc-alo-circle-fill-anim {
        0% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            -moz-transform: rotate(0) -moz-scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-webkit-keyframes coccoc-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-o-keyframes coccoc-alo-circle-fill-anim {
        0% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-moz-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-webkit-keyframes coccoc-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-o-keyframes coccoc-alo-circle-img-anim {
        0% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-moz-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }

    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }

    @-o-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }

    @keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }

    @-moz-keyframes fadeOutRight {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @-webkit-keyframes fadeOutRight {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @-o-keyframes fadeOutRight {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @keyframes fadeOutRight {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @-moz-keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @-webkit-keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @-o-keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @-moz-keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-webkit-keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-o-keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-moz-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-webkit-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-o-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    #coccoc-alo-wrapper {
        position: fixed;
        width: 100%;
        bottom: 0;
        top: 0;
        left: 0;
        z-index: 2000000;
        overflow: visible;
        display: none;
        color: #383838
    }

    #coccoc-alo-wrapper.night-mode {
        color: #fff
    }

    .coccoc-alo-popup-close {
        -webkit-border-radius: 2px !important;
        -moz-border-radius: 2px !important;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        position: absolute !important;
        right: -15px !important;
        top: -15px !important;
        height: 30px !important;
        width: 30px !important;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjRGMTI2QTcxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjRGMTI2QTYxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5iCEbHAAABl0lEQVR42sSXS07DMBCGnSKyDorEAVjACTgCIEVlXU5R9QjlCk3VAzTrLhMJ2NIVJ2DDuo9EsKUszEw0kaIQbI+bxy/9UhRP5pMcjz12pJTCQKfgO/AN+Bp8AfZo7Av8AX4Dv4CfwD/ajAhW2ANPwTtprj1946lyq6AP4I2014ZyGINPwAvZnBaUUwnGgJVsXqsqvAoOZXua/wceyfY1KngOlROWxjv4XLSrHfgKS3BALyYdQAUxJkUdu7o6jeNYZlmmnUeMwViNkOUieKiLTNNURlGkhOPYcrnMYw00RPDMJFIFZ0JRIYJfTaPr4BZQ1Fow9+EcgCAEWkLz/4zl9A1rzOUsTQCKJEny5yAIhO/73NV9GNjUhOM4tc8scae6PL3laedONYLXNtC6f85dXDNb6BHw0GgDKaCqxEz4fbFlpk1smQjnbJmCeqSuNO3jWNyDL8vHIrao4w6OxTGx/rQ+8z5an16bvd7a22pDvz0CuOU29NUrzKOuzqvlTN8orzAO89J2W7q0ndHYZ+nS9kw+6BL+CjAAEvDTBJC9qhAAAAAASUVORK5CYII=");
        background-position: center center;
        background-repeat: no-repeat;
        cursor: pointer !important;
        -webkit-transition: .3s ease-out !important;
        -moz-transition: .3s ease-out !important;
        -o-transition: .3s ease-out !important;
        transition: .3s ease-out !important
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup-close {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUY2REUyNDQxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUY2REUyNDMxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz56uyuzAAABfUlEQVR42sSXvU7DMBDHYxCdw8IDMMCWTDwCdClznLcJr9BUfYs+ALDSqXMisTD3S4K1MBx3kS1ZVuqvNslf+kuRfL5f5OTsMwOAyEFX6DH6Ef2AvkXHYuwH/YVeod/Rr+g/a0YCGxyjC/QW3LUTc2JTbhOUo9cQrrXI4Qy+RM/hfJqLnEYwBSzg/FrocB1cQneaHQNn0L0yyWOinKg0PtE3Ubfaou+bEhRvUEB/KuRSj2x1muc51HVtzUgxnHNbGLFGBJ7YIquqgjRNjXAaS5KkiXXQhMBTl0gT3BNKKgn84RrdBg+AkpaR5z7cAAhEwEBo850JfPCdJeGBUNLhIqQYGWOtz17yXWp1edVlD1nqZQi07Zv7/lzTUOgJ8NJpA5FQU2JP+LPcMvfGIyXLnBISnGJdt8xBDom+j8Ud+k49FvtqBPix1mc2ROszaLM3WHurN/SbE4Ab34Zev8K82Opc017MMV5hmOel7Um5tF2LsW/l0vYm/GtL+C/AAAHy+OD95QLeAAAAAElFTkSuQmCC")
    }

    #coccoc-alo-wrapper .coccoc-alo-popup-close:hover {
        opacity: .6 !important
    }

    .coccoc-alo-popup {
        display: inline-block;
        position: relative;
        -webkit-border-radius: 16px;
        -moz-border-radius: 16px;
        border-radius: 16px;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYZCyIUPNCUUwAAAA1JREFUCNdj+P///2cACe8D8SyfS4EAAAAASUVORK5CYII=");
        -webkit-transition: .6s ease-out;
        -moz-transition: .6s ease-out;
        -o-transition: .6s ease-out;
        transition: .6s ease-out;
        margin: 0 auto;
        z-index: 200001;
        text-align: center;
        padding: 60px 75px
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYZCyAMHYpuhwAAAA1JREFUCNdjMDY2/gwAAsMBjX/tf+YAAAAASUVORK5CYII=")
    }

    #coccoc-alo-wrapper .coccoc-alo-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlOZyTXzhgAAAApJREFUCB1jYAAAAAIAAc/INeUAAAAASUVORK5CYII=");
        top: 0;
        left: 0;
        z-index: 200000
    }

    .coccoc-alo-popup h3 {
        font-size: 24px;
        margin: 0 0 40px;
        font-family: 'Open Sans';
        font-weight: 300;
        white-space: nowrap
    }

    .night-mode .coccoc-alo-popup h3 {
        font-size: 23px
    }

    .night-mode .coccoc-alo-message {
        padding-bottom: 0
    }

    .coccoc-alo-message {
        height: 32px;
        padding: 18px 0 13px 0;
        text-align: center;
        clear: both;
        font-size: 14px
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper .label,
    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper .label+.input {
        float: left;
        width: 49%
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper .input {
        padding: 0 13px
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper label {
        color: #616161;
        font-size: 18px;
        height: 28px;
        line-height: 28px;
        padding-right: 15px
    }

    .coccoc-alo-number {
        color: #00bed5;
        font-size: 28px;
        font-family: Montserrat, "Lucida Console", Monaco, monospace, sans-serif;
        font-weight: normal;
        background-color: transparent;
        border: none;
        border-width: 0;
        display: inline-block;
        border-bottom: #00bed5 solid 1px;
        padding-bottom: 10px;
        margin: 0 auto;
        width: 221px
    }

    coccoc-alo-number::-ms-clear {
        display: none;
        width: 0;
        height: 0
    }

    .night-mode .coccoc-alo-number {
        border: #00bed5 solid 1px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        padding: 13px 31px
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"].valid-invalid {
        color: #ff496b
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]:focus {
        outline: 0
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
        color: #d1d1d1
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #d1d1d1
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
        color: #d1d1d1
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #d1d1d1
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
        color: #60615f
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #60615f
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
        color: #60615f
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup .coccoc-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #60615f
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-submit {
        border: none;
        border-width: 0;
        padding: 20px 40px;
        background-color: #333;
        -webkit-border-radius: 68px;
        -moz-border-radius: 68px;
        -webkit-border-radius: 68px;
        -moz-border-radius: 68px;
        border-radius: 68px;
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        outline: none !important
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup .coccoc-alo-submit {
        background-color: #00bed5
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-submitavtive,
    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-submitvisited {
        outline: none !important
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-submit-moz-focus-inner {
        border: 0
    }

    #coccoc-alo-wrapper .coccoc-alo-popup .coccoc-alo-submit:hover {
        background-color: #00aff2;
        background-color: #00aff2
    }

    .coccoc-alo-blur {
        -webkit-filter: blur(3px);
        -ms-filter: blur(3px);
        -moz-filter: blur(3px);
        -o-filter: blur(3px);
        filter: blur(3px);
        filter: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxmaWx0ZXIgaWQ9ImJsdXIiPjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjMiLz48L2ZpbHRlcj48L3N2Zz4jYmx1cg==#blur")
    }

    #coccoc-countdown {
        padding-top: 20px;
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        font-size: 28px;
        font-weight: 300
    }

    .coccoc-alo-request-time {
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        padding: 6px 12px;
        font-size: 18px;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-request-time {
        color: #fff;
        background-color: #515350;
        border: 1px solid #606260
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-popup h3 {
        margin-bottom: 15px
    }

    #coccoc-alo-wrapper.night-mode .coccoc-alo-form .coccoc-alo-select-wrapper {
        margin-bottom: 35px
    }

    .coccoc-alo-table {
        display: table;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0
    }

    .coccoc-alo-cell {
        display: table-cell;
        vertical-align: middle;
        text-align: center
    }

    .valid-invalid-message {
        font-size: 13px;
        color: #ff496b
    }

    .valid-invalid-message:before {
        content: "* "
    }
    </style>
<p style="text-align: center;">
	&nbsp;Copyrights&nbsp;<a href="https://ungdungviet.vn/">Thiet Ke Website</a> by <a href="https://ungdungviet.vn/">ungdungviet.vn</a></p>
