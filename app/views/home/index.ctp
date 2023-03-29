<section id="product-listitem" class="thucdon clearfix">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home">
                    <div class="s-badge"><svg class="svg-food-menu" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32" cy="32" r="32" fill="url(#paint0_food_menu_radial)"></circle>
                            <path d="M47.1766 43.2078L34.6213 30.66L20.2592 16.3064C20.0629 16.1102 19.7967 16 19.5191 16H19.4451C19.0596 16 18.7134 16.2358 18.5722 16.5944C17.9544 18.1634 17.6904 19.7682 17.8089 21.235C17.944 22.907 18.5795 24.3546 19.647 25.4214L30.364 36.132C30.7696 36.5373 31.4268 36.5373 31.8323 36.132C32.2539 35.7107 32.9429 35.7299 33.3404 36.1741L43.1952 47.187C44.2483 48.2395 46.061 48.302 47.1766 47.187C48.2744 46.0899 48.2744 44.3049 47.1766 43.2078Z" fill="url(#paint1_food_menu_linear)"></path>
                            <path d="M27.7915 36.2132C26.6911 35.1126 24.9068 35.1126 23.8064 36.2132L16.8238 43.1972C15.7254 44.2958 15.7254 46.0836 16.8238 47.1823C17.8673 48.226 19.6725 48.3181 20.8082 47.1823L27.7915 40.1976C28.8916 39.0973 28.8916 37.3135 27.7915 36.2132Z" fill="url(#paint2_food_menu_linear)"></path>
                            <path d="M47.336 21.9779C46.9692 21.6111 46.3744 21.6111 46.0076 21.9779L42.2448 25.7414C41.878 26.1083 41.2832 26.1083 40.9164 25.7414C40.5497 25.3746 40.5497 24.78 40.9164 24.4132L44.6797 20.6492C45.0464 20.2824 45.0464 19.6878 44.6797 19.3211C44.3129 18.9542 43.7181 18.9542 43.3513 19.3211L39.5886 23.0845C39.2218 23.4514 38.627 23.4514 38.2602 23.0845C37.8935 22.7178 37.8935 22.1232 38.2602 21.7564L42.0235 17.9924C42.3902 17.6256 42.3902 17.0311 42.0235 16.6643C41.6567 16.2974 41.062 16.2974 40.6952 16.6643L34.7187 22.642C33.9063 23.4545 33.4212 24.5334 33.3526 25.68C33.3211 26.2088 33.4032 26.7711 33.7778 27.1457L36.8566 30.2252C37.231 30.5997 37.7933 30.6818 38.3219 30.6502C39.4683 30.5818 40.547 30.0965 41.3593 29.284L47.336 23.3061C47.7028 22.9394 47.7028 22.3447 47.336 21.9779Z" fill="url(#paint3_food_menu_linear)"></path>
                            <defs>
                                <radialGradient id="paint0_food_menu_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32) rotate(90) scale(64)">
                                    <stop stop-color="#BC2030"></stop>
                                    <stop offset="1" stop-color="#911A27"></stop>
                                </radialGradient>
                                <linearGradient id="paint1_food_menu_linear" x1="32.8906" y1="16" x2="32.8906" y2="48" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                    <stop offset="1" stop-color="#F7F3F2"></stop>
                                </linearGradient>
                                <linearGradient id="paint2_food_menu_linear" x1="32" y1="16" x2="32" y2="48" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                    <stop offset="1" stop-color="#F7F3F2"></stop>
                                </linearGradient>
                                <linearGradient id="paint3_food_menu_linear" x1="32" y1="16" x2="32" y2="48" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                    <stop offset="1" stop-color="#F7F3F2"></stop>
                                </linearGradient>
                            </defs>
                        </svg></div>
                    <span>
                        Thực đơn Vua lợn quay</span>
                    <p class="s-subtitle">Không Thể NGON Hơn Được Nữa!</p>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="thucdon-box">
                    <?php $setting = $this->requestAction('/comment/setting') ?>
                    <?php foreach($setting as $settings ){  ?>
                    <?php echo $settings['Setting']['descriptions'];?>
                    <?php }?>
                </div>
                <div class="btn-section-cta">
                    <a class="btn-full-menu vc_btn3" href="/san-pham.html/">Xem thực đơn đầy đủ</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="product-listitem" class="tintuc-home clearfix">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home">
                    <div class="s-badge"><svg class="svg-food-promo" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M61.1822 25.175L58.8774 22.8705C57.9811 21.9743 57.4689 20.758 57.4689 19.4809V16.181C57.4689 10.8677 53.1473 6.54992 47.8334 6.54992H44.5362C43.2557 6.54992 42.0393 6.03461 41.143 5.1384L38.8061 2.80506C35.0287 -0.939807 28.9145 -0.939807 25.1692 2.83387L22.8643 5.1384C21.968 6.03461 20.7516 6.54992 19.4711 6.54992H16.1739C10.86 6.54992 6.53842 10.8677 6.53842 16.181V19.4457C6.53842 20.758 6.02624 21.9743 5.12991 22.8705L2.79306 25.2102C-0.952294 28.9839 -0.920282 35.1005 2.82508 38.8422L5.12991 41.1147C6.02624 42.0429 6.53842 43.2592 6.53842 44.5427V47.8363C6.53842 53.1495 10.86 57.4737 16.1739 57.4737H19.4711C20.7516 57.4737 21.968 57.9826 22.8643 58.8788L25.2012 61.2186C27.0899 63.075 29.5548 64 32.0197 64C34.4846 64 36.9494 63.075 38.8381 61.1833L41.143 58.8788C42.0393 57.9826 43.2557 57.4737 44.5362 57.4737H47.8334C53.1473 57.4737 57.4689 53.1495 57.4689 47.8363V44.5427C57.4689 43.2592 57.9811 42.0429 58.8774 41.1467L61.1502 38.8742C61.1822 38.8422 61.2142 38.8134 61.2463 38.7782C63.0389 36.957 64.0313 34.5212 63.9992 31.9606C63.9992 29.4 63.0069 26.9674 61.1822 25.175Z" fill="url(#paint0_food_promo_linear)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.2001 22.4C27.2001 25.0509 25.0511 27.2 22.4001 27.2C19.7491 27.2 17.6001 25.0509 17.6001 22.4C17.6001 19.749 19.7491 17.6 22.4001 17.6C25.0511 17.6 27.2001 19.749 27.2001 22.4ZM46.4001 41.6C46.4001 44.2509 44.2511 46.4 41.6001 46.4C38.9491 46.4 36.8001 44.2509 36.8001 41.6C36.8001 38.949 38.9491 36.8 41.6001 36.8C44.2511 36.8 46.4001 38.949 46.4001 41.6ZM45.2972 18.497C44.3599 17.5598 42.8403 17.5598 41.903 18.497L18.4967 41.9034C17.5594 42.8407 17.5594 44.3603 18.4967 45.2975C19.4339 46.2348 20.9535 46.2348 21.8908 45.2975L45.2972 21.8911C46.2344 20.9539 46.2344 19.4343 45.2972 18.497Z" fill="url(#paint1_food_promo_linear)"></path>
                            <defs>
                                <linearGradient id="paint0_food_promo_linear" x1="30.2222" y1="0" x2="30.2222" y2="64" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F15B2C"></stop>
                                    <stop offset="1" stop-color="#BC2030"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_food_promo_linear" x1="32.0001" y1="17.6" x2="32.0001" y2="46.4" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                    <stop offset="1" stop-color="#F7F3F2"></stop>
                                </linearGradient>
                            </defs>
                        </svg></div>
                    <span>
                        Khuyến mãi & Ưu đãi</span>
                    <p class="s-subtitle">Nhiều khuyến mãi hấp dẫn luôn chờ đón bạn</p>
                </div>
            </div>
            <?php $hotnew = $this->requestAction('/comment/hotnew');?>
            <?php foreach($hotnew as $value){?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
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
</section> -->
<!-- <section id="product-listitem" class="clearfix taisao">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home">
                    <div class="s-badge"><svg class="svg-food-membership" width="65" height="64" viewBox="0 0 65 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32.5" cy="32" r="32" fill="url(#paint0_food_membership_linear)"></circle>
                            <path d="M28.0237 26.9439L31.6018 19.6795C31.9683 18.9353 33.0294 18.9353 33.3959 19.6795L36.9741 26.9439L44.9886 28.102C45.8094 28.2206 46.1374 29.2292 45.5434 29.808L39.7467 35.4561L41.1151 43.4372C41.2553 44.2544 40.3971 44.8773 39.6635 44.4909L32.4989 40.717L25.3343 44.4909C24.6003 44.8776 23.7419 44.2538 23.8828 43.4364L25.2579 35.4561L19.4548 29.8084C18.8603 29.2298 19.1882 28.2207 20.0092 28.102L28.0237 26.9439Z" fill="url(#paint1_food_membership_linear)"></path>
                            <defs>
                                <linearGradient id="paint0_food_membership_linear" x1="32.5" y1="0" x2="32.5" y2="64" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FAAF42"></stop>
                                    <stop offset="1" stop-color="#F15B2C"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_food_membership_linear" x1="32.4989" y1="19.1213" x2="32.4989" y2="44.6084" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                    <stop offset="1" stop-color="#F7F3F2"></stop>
                                </linearGradient>
                            </defs>
                        </svg></div>
                    <span>
                        Thẻ thành viên Vua lợn quay</span>
                    <p class="s-subtitle">Đăng ký dễ dàng và nhận hàng ngàn ưu đãi!</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <?php $setting = $this->requestAction('/comment/setting') ?>
                    <?php foreach($setting as $settings ){  ?>
                    <?php echo $settings['Setting']['address_eg'];?>
                    <?php }?>
                </div>
                <div class="chat-links">
                    <a class="btn-white" href="http://m.me/"><i class="icon-24"><svg class="svg-messenger-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37257 0 0 4.9746 0 11.1111C0 14.6078 1.74499 17.7267 4.47205 19.7635V24L8.55794 21.7576C9.64837 22.0593 10.8036 22.2222 12 22.2222C18.6274 22.2222 24 17.2476 24 11.1111C24 4.9746 18.6274 0 12 0ZM13.1926 14.963L10.1366 11.7037L4.17392 14.963L10.7329 8L13.8634 11.2592L19.7516 8L13.1926 14.963Z" fill="url(#paint0_messenger_24_linear)"></path>
                                <defs>
                                    <linearGradient id="paint0_messenger_24_linear" x1="11.3333" y1="0" x2="11.3333" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#01ADFF"></stop>
                                        <stop offset="1" stop-color="#006FFF"></stop>
                                    </linearGradient>
                                </defs>
                            </svg></i>Đăng ký qua Facebook</a>
                    <a class="btn-white" href="https://zalo.me/"><i class="icon-24"><svg class="svg-zalo-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.9717 17.1764C23.8774 17.1819 23.8407 17.2644 23.7884 17.3195C22.7721 18.3921 21.5725 19.2502 20.2576 19.8608C17.0306 21.346 13.7513 21.4559 10.43 20.2569C10.1419 20.1468 9.82755 20.1303 9.52893 20.2128C9.08886 20.3283 8.65408 20.4658 8.21931 20.6033C6.94932 21.0116 5.65879 21.199 4.3377 20.9363C4.32371 20.9336 4.27251 20.9223 4.26181 20.9165C4.18708 20.8762 4.14697 20.8275 4.2433 20.7408C4.31668 20.6913 4.38996 20.6363 4.46334 20.5923C5.14958 20.1247 5.79398 19.6131 6.21824 18.8595C6.56922 18.2325 6.51156 17.8694 6.07158 17.4019C3.59369 14.7945 2.4989 11.6701 3.0437 7.99016C3.35264 5.90546 4.26422 4.11226 5.57905 2.5501C6.37531 1.60394 7.32354 0.839315 8.36076 0.20125C8.41843 0.162776 8.51273 0.15174 8.52314 0.0527196C8.50742 -0.0022581 8.46548 0.0142453 8.43405 0.0142453C6.66863 0.0142453 4.90322 -0.0242289 3.14311 0.0252814C1.46158 0.0747916 0 1.44437 0 3.40818C0.0105101 9.15087 0 14.8881 0 20.6253C0 22.402 1.2939 23.8927 2.98594 23.9643C4.41609 24.0192 18.9374 23.9973 20.8233 23.9862H20.8495C22.5992 23.9697 24.0031 22.4736 23.9926 20.6363V17.4185C23.9926 17.336 24.0188 17.2534 23.9717 17.1764Z" fill="url(#paint0_zalo_24_linear)"></path>
                                <path d="M6.82597 6.95605C6.62686 7.00556 6.46979 7.17606 6.42264 7.38513C6.35456 7.69312 6.53786 8.00668 6.83648 8.07816C6.96222 8.1057 7.09316 8.1222 7.2241 8.1222C7.78991 8.12767 8.36083 8.1222 8.92664 8.12767C8.9895 8.13313 9.06288 8.08919 9.11524 8.18264C9.06809 8.24319 9.02094 8.3092 8.97379 8.37521C8.16181 9.45328 7.34984 10.5369 6.54307 11.6151C6.34396 11.8846 6.23924 12.1816 6.3859 12.5117C6.53256 12.8418 6.83118 12.9078 7.13501 12.9243C7.38117 12.9408 7.62223 12.9297 7.8684 12.9297C8.71701 12.9297 9.56042 12.9352 10.4091 12.9243C10.8596 12.9188 11.1006 12.6272 11.0534 12.1927C11.0115 11.8461 10.7862 11.6646 10.3724 11.6591C9.6338 11.6536 8.8899 11.6591 8.09885 11.6591C8.18264 11.5381 8.23509 11.4665 8.29266 11.3951C8.9789 10.4875 9.66514 9.57437 10.3514 8.65576C10.5504 8.38625 10.7495 8.11673 10.8752 7.80318C11.0167 7.44011 10.8647 7.09365 10.5085 6.96709C10.3462 6.92305 10.1838 6.90108 10.0161 6.90654C9.08361 6.90108 8.146 6.90108 7.21349 6.90654C7.08265 6.90654 6.95161 6.92305 6.82597 6.95605Z" fill="url(#paint1_zalo_24_linear)"></path>
                                <path d="M20.2365 13.0783C21.4885 12.9463 22.3005 11.9616 22.2585 10.57C22.2166 9.19483 21.2423 8.25424 19.9065 8.29819C18.6493 8.33666 17.7639 9.39277 17.8059 10.8065C17.785 12.1816 18.8693 13.2214 20.2365 13.0783ZM19.1207 10.6745C19.1207 9.9869 19.5188 9.53584 20.0846 9.56884C20.3307 9.57431 20.5613 9.70634 20.7079 9.91542C21.0065 10.3335 21.0065 11.0375 20.7027 11.4556C20.6556 11.5106 20.6084 11.5657 20.5507 11.6096C20.1736 11.9176 19.634 11.8406 19.3459 11.4446C19.1888 11.2191 19.1102 10.9496 19.1207 10.6745Z" fill="url(#paint2_zalo_24_linear)"></path>
                                <path d="M12.4364 12.9793C13.0179 13.1773 13.5574 13.1058 14.0341 12.6987C14.1598 12.5942 14.1965 12.6162 14.2856 12.7317C14.4584 12.9683 14.7571 13.0508 15.0189 12.9463C15.2756 12.8638 15.4537 12.6107 15.4537 12.3247C15.4642 11.2245 15.4694 10.1244 15.4537 9.0243C15.4485 8.58427 15.0608 8.30371 14.6469 8.3917C14.4322 8.43574 14.3012 8.59521 14.1754 8.76571C13.5206 8.16612 12.7977 8.12764 12.0853 8.57314C11.2262 9.10125 10.9066 9.95933 11.0167 10.966C11.1215 11.8956 11.5039 12.6603 12.4364 12.9793ZM13.2955 9.56882C13.5417 9.57429 13.7722 9.70085 13.9189 9.91539C14.2122 10.3335 14.2122 11.021 13.9189 11.4391C13.8665 11.5106 13.8089 11.5711 13.746 11.6206C13.3636 11.9177 12.824 11.8352 12.5411 11.4391C12.4049 11.2465 12.3316 11.0156 12.3211 10.7735C12.3159 9.99791 12.7193 9.53034 13.2955 9.56882Z" fill="url(#paint3_zalo_24_linear)"></path>
                                <path d="M16.0299 12.2642C16.0299 12.6107 16.229 12.9022 16.4909 12.9737C16.5537 12.9902 16.6218 12.9957 16.6847 12.9957C17.0566 12.9846 17.35 12.6601 17.3447 12.2696C17.3499 11.417 17.3447 10.5644 17.3447 9.71184C17.3447 8.85377 17.3499 7.99014 17.3447 7.13207C17.3447 6.69205 17.0775 6.41697 16.6794 6.42254C16.2918 6.42254 16.0351 6.69752 16.0298 7.12114C16.0246 7.37962 16.0298 7.63274 16.0298 7.89122L16.0299 12.2642Z" fill="url(#paint4_zalo_24_linear)"></path>
                                <defs>
                                    <linearGradient id="paint0_zalo_24_linear" x1="11.3333" y1="0" x2="11.3333" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3185FF"></stop>
                                        <stop offset="1" stop-color="#005BE0"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_zalo_24_linear" x1="11.3333" y1="0" x2="11.3333" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3185FF"></stop>
                                        <stop offset="1" stop-color="#005BE0"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint2_zalo_24_linear" x1="11.3333" y1="0" x2="11.3333" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3185FF"></stop>
                                        <stop offset="1" stop-color="#005BE0"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint3_zalo_24_linear" x1="11.3333" y1="0" x2="11.3333" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3185FF"></stop>
                                        <stop offset="1" stop-color="#005BE0"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint4_zalo_24_linear" x1="11.3333" y1="0" x2="11.3333" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3185FF"></stop>
                                        <stop offset="1" stop-color="#005BE0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg></i>Đăng ký qua Zalo</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section id="product-listitem" class="video-home clearfix">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home">
                    <span>
                        Công Thức Độc Quyền Lợn Mán Quay</span>
                    <p class="s-subtitle">Thơm ngon đậm đà chuẩn vị</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 body-video">
                <div id="myElement">
                                <?php $video = $this->requestAction('/comment/videos') ;?>
                                <?php $i=1; foreach($video as $video){?>
                                <?php 
                    $url = $video['Video']['LinkUrl'];
                    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );     
                    if($i==1){?>
                                <iframe width='100%' height='230' src='https://www.youtube.com/embed/<?php echo $my_array_of_vars['v'];?>' frameborder='0' allowfullscreen></iframe>
                                <?php $i++;}}?>
                            </div>
                            <ul id='list_player'>
                                <?php $videos = $this->requestAction('/comment/videos') ;?>
                                <?php foreach($videos as $video){?>
                                <?php 
                    $url = $video['Video']['LinkUrl'];
                    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );     
                    ?>
                                <li><a href='javascript:void(0)' class='videoItems' title='<?php echo $video['Video']['name']?>' name='https://www.youtube.com/embed/<?php echo $my_array_of_vars['v'];?>'><?php echo $video['Video']['name']?></a></li>
                                <?php }?>

                            </ul>
                            <script type="text/javascript">
                                $(".videoItems").on("click", function() {
                                    var strURL = this.name;
                                    strURL = strURL.replace("&feature=youtu.be", "");
                                    strURL = strURL.replace("watch?v=", "embed/");
                                    strURL = strURL.indexOf("?rel=0") > 0 ? strURL : strURL + "?rel=0";
                                    strURL = strURL.indexOf("&autoplay=1") > 0 ? strURL : strURL + "&autoplay=1";
                                    $("#myElement").find("iframe")[0].src = strURL;
                                })
                            </script>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="product-listitem" class="ketnoi clearfix">
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title-home">
                    <span>
                        Kết nối với Vua lợn quay</span>
                    <p class="s-subtitle">Kết nối với chúng tôi để nhận thông tin ưu đãi sớm nhất</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 body-video">
                <div class="s-content">
                    <ul class="social-links">
                        <li><a target="_blank" href="https://www.facebook.com/thuonghieuvualonquay"><svg class="svg-facebook-120" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="60" cy="60" r="60" fill="#C4C4C4"></circle>
                                    <circle cx="60" cy="60" r="60" fill="url(#paint0_facebook_120_linear_fb)"></circle>
                                    <path d="M88 60.1704C88 44.6085 75.4677 32 60 32C44.5323 32 32 44.6085 32 60.1704C32 74.2306 42.2392 85.8849 55.625 88V68.3137H48.5121V60.1704H55.625V53.9638C55.625 46.9042 59.8024 43.0046 66.2006 43.0046C69.2648 43.0046 72.469 43.5544 72.469 43.5544V50.4834H68.9374C65.46 50.4834 64.375 52.6553 64.375 54.8828V60.1704H72.1405L70.8985 68.3137H64.375V88C77.7608 85.8849 88 74.2306 88 60.1704Z" fill="url(#paint1_facebook_120_linear_fb)"></path>
                                    <defs>
                                        <linearGradient id="paint0_facebook_120_linear_fb" x1="56.6667" y1="0" x2="56.6667" y2="120" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#01ADFF"></stop>
                                            <stop offset="1" stop-color="#006FFF"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint1_facebook_120_linear_fb" x1="60" y1="32" x2="60" y2="88" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                            <stop offset="1" stop-color="#F7F3F2"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>Facebook</a></li>
                        <li><a target="_blank" href="//m.me/thuonghieuvualonquay"><svg class="svg-messenger-120" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                </svg>Messenger</a></li>
                        <li><a href="tel:094 172 8888"><svg width="120" height="120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve">
                                    <style type="text/css">
                                    .st0 {
                                        fill: url(#path2985_1_);
                                    }

                                    .st1 {
                                        fill: url(#path2232_1_);
                                    }
                                    </style>
                                    <linearGradient id="path2985_1_" gradientUnits="userSpaceOnUse" x1="60.003" y1="-4.267873e-03" x2="60.003" y2="119.4958">
                                        <stop offset="0" style="stop-color:#FF2230" />
                                        <stop offset="1" style="stop-color:#CE2230" />
                                    </linearGradient>
                                    <path id="path2985" sodipodi:cx="268.57144" sodipodi:cy="553.79077" sodipodi:rx="194.28572" sodipodi:ry="195.71428" sodipodi:type="arc" class="st0" d="  M120,60c0.2,32.9-26.4,59.8-59.6,60S0.2,93.8,0,60.8c0-0.3,0-0.6,0-0.9C-0.2,27.1,26.4,0.2,59.6,0s60.2,26.2,60.4,59.1  C120,59.4,120,59.7,120,60z" />
                                    <sodipodi:namedview bordercolor="#666666" borderopacity="1.0" id="base" inkscape:current-layer="layer1" inkscape:cx="321.6985" inkscape:cy="235.81787" inkscape:document-units="px" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:window-height="453" inkscape:window-maximized="0" inkscape:window-width="1361" inkscape:window-x="63" inkscape:window-y="450" inkscape:zoom="0.35" pagecolor="#ffffff" showgrid="false">
                                    </sodipodi:namedview>
                                    <linearGradient id="path2232_1_" gradientUnits="userSpaceOnUse" x1="59.9999" y1="31.2233" x2="59.9999" y2="92.0679">
                                        <stop offset="0" style="stop-color:#F5D0D3" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <path id="path2232" inkscape:connector-curvature="0" sodipodi:nodetypes="csssssssssssssssssssssssssssssccsssssccssssc" class="st1" d="  M72.9,89c2.6-0.8,5.4-1.9,6.3-2.4c0.6-0.4,0.7-0.5,0.5-0.7C78.2,84.3,67,74.5,66.9,74.5c-0.1,0-0.3,0.7-0.4,1.6  c-0.3,1.6-0.6,2-1.5,2c-0.8,0-1.3-0.4-2-1.7c-0.3-0.6-0.8-1.3-1.1-1.7c-0.3-0.4-0.9-1.4-1.4-2.2c-0.5-0.8-1.3-2.2-1.8-3  c-1.2-1.9-2.6-4.2-3.1-5.2c-0.2-0.4-0.8-1.2-1.2-1.9c-0.5-0.6-1-1.5-1.3-2c-0.3-0.5-1-1.7-1.6-2.6c-0.6-0.9-1.4-2.2-1.7-2.8  c-0.3-0.6-0.8-1.5-1.2-2.1c-0.8-1.3-1.8-3.3-2-4c-0.1-0.4,0-0.7,0.4-1.1c0.6-0.6,0.6-0.6,2.5,0c0.6,0.2,1.2,0.3,1.3,0.3  c0.1-0.1-4.2-16.9-4.4-17c-0.1-0.1-5.2,4.1-5.2,4.4c0,0.1-0.4,0.6-1,1.1c-0.5,0.5-1.3,1.5-1.7,2.1c-0.6,1-0.7,1.4-0.9,3.1  c-0.6,5.5,0.8,13.5,3.6,19.9c1.5,3.4,2.4,5.2,3.4,6.6c0.5,0.7,1.1,1.7,1.4,2.3c1.6,3.3,6.8,9.2,10.4,12c2.5,1.9,7.7,5.4,9,5.9  C68.7,89.9,69.7,90,72.9,89L72.9,89z M82,82.8c0.8-1.9,0.8-2,0.5-2.3c-0.3-0.3-9.3-8.1-10.6-9.2c-0.3-0.2-0.6-0.2-2.4,0.8  c-1.7,0.9-2,1.1-1.8,1.3c0.9,0.8,13.4,11.6,13.4,11.5C81.2,84.8,81.6,83.9,82,82.8L82,82.8z M54.3,46.5c0.9-0.7,1.6-1.2,1.5-1.2  C55.6,44.3,52.2,31,52.1,31c-0.1-0.1-4.4-0.7-4.5-0.6c-0.1,0.1,1.1,4.6,4.4,16.9C52.2,48.1,52.1,48.2,54.3,46.5L54.3,46.5z" />
                                </svg>Hotline</a></li>
                        <li><a target="_blank" href="//zalo.me/0941728888"><svg class="svg-zalo-120" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="60" cy="60" r="60" fill="url(#paint0_zalo_120_linear_zalo)"></circle>
                                    <path d="M87.9342 72.0784C87.7142 72.0912 87.6287 72.2837 87.5065 72.4123C85.1351 74.915 82.336 76.9172 79.2679 78.342C71.7382 81.8075 64.0865 82.0641 56.3368 79.2662C55.6645 79.0094 54.9311 78.9709 54.2343 79.1635C53.2074 79.433 52.193 79.7538 51.1785 80.0747C48.2152 81.0272 45.2039 81.4645 42.1213 80.8517C42.0887 80.8453 41.9692 80.8189 41.9443 80.8054C41.7699 80.7114 41.6763 80.5977 41.9011 80.3955C42.0723 80.28 42.2433 80.1517 42.4145 80.0489C44.0157 78.9579 45.5193 77.7642 46.5093 76.0058C47.3283 74.5427 47.1937 73.6955 46.1671 72.6046C40.3853 66.5207 37.8308 59.2304 39.102 50.6438C39.8229 45.7795 41.9499 41.5953 45.0178 37.9503C46.8758 35.7425 49.0883 33.9584 51.5085 32.4696C51.6431 32.3798 51.8631 32.3541 51.8874 32.123C51.8507 31.9947 51.7529 32.0332 51.6795 32.0332C47.5602 32.0332 43.4409 31.9435 39.334 32.059C35.4104 32.1745 32 35.3702 32 39.9525C32.0245 53.3521 32 66.739 32 80.1259C32 84.2716 35.0191 87.7498 38.9672 87.9169C42.3043 88.0452 76.1875 87.9939 80.5879 87.9681H80.6491C84.7317 87.9296 88.0076 84.4386 87.983 80.1517V72.6433C87.983 72.4508 88.0442 72.2582 87.9342 72.0784Z" fill="url(#paint1_zalo_120_linear_zalo)"></path>
                                    <path d="M47.9273 48.2309C47.4627 48.3464 47.0962 48.7442 46.9862 49.2321C46.8274 49.9507 47.2551 50.6823 47.9519 50.8491C48.2453 50.9134 48.5508 50.9519 48.8563 50.9519C50.1765 50.9646 51.5087 50.9519 52.8289 50.9646C52.9756 50.9774 53.1468 50.8749 53.269 51.0929C53.159 51.2342 53.049 51.3882 52.9389 51.5423C51.0443 54.0577 49.1497 56.5862 47.2672 59.102C46.8026 59.7308 46.5583 60.424 46.9005 61.1941C47.2427 61.9643 47.9395 62.1183 48.6484 62.1568C49.2228 62.1953 49.7853 62.1696 50.3597 62.1696C52.3398 62.1696 54.3078 62.1823 56.2881 62.1568C57.3392 62.144 57.9015 61.4637 57.7915 60.4497C57.6936 59.6411 57.168 59.2175 56.2024 59.2047C54.479 59.192 52.7432 59.2047 50.8974 59.2047C51.0929 58.9224 51.2153 58.7554 51.3496 58.5886C52.9509 56.4709 54.5521 54.3403 56.1533 52.1969C56.6177 51.568 57.0823 50.9391 57.3757 50.2075C57.7057 49.3603 57.3512 48.5519 56.5201 48.2566C56.1412 48.1539 55.7623 48.1026 55.371 48.1153C53.1952 48.1026 51.0074 48.1026 48.8316 48.1153C48.5263 48.1153 48.2205 48.1539 47.9273 48.2309Z" fill="url(#paint2_zalo_120_linear_zalo)"></path>
                                    <path d="M79.2188 62.5162C82.1401 62.2081 84.0347 59.9106 83.9368 56.6634C83.8389 53.4547 81.5655 51.26 78.4487 51.3625C75.5151 51.4523 73.4494 53.9166 73.5473 57.2153C73.4984 60.424 76.0285 62.85 79.2188 62.5162ZM76.6151 56.9072C76.6151 55.3029 77.544 54.2504 78.8642 54.3274C79.4386 54.3402 79.9765 54.6482 80.3187 55.1361C81.0154 56.1115 81.0154 57.7544 80.3065 58.7298C80.1965 58.8581 80.0865 58.9866 79.952 59.0892C79.0718 59.8078 77.8129 59.6283 77.1406 58.7041C76.7741 58.178 76.5908 57.5491 76.6151 56.9072Z" fill="url(#paint3_zalo_120_linear_zalo)"></path>
                                    <path d="M61.0184 62.2851C62.3752 62.7472 63.634 62.5805 64.7464 61.6305C65.0398 61.3867 65.1252 61.438 65.3331 61.7075C65.7365 62.2594 66.4333 62.4519 67.0444 62.2081C67.6433 62.0156 68.0588 61.4252 68.0588 60.7578C68.0834 58.1907 68.0955 55.6236 68.0588 53.0568C68.0467 52.0301 67.142 51.3754 66.1764 51.5807C65.6753 51.6835 65.3696 52.0556 65.0762 52.4534C63.5483 51.0544 61.8614 50.9646 60.1992 52.0041C58.1946 53.2364 57.449 55.2386 57.7057 57.5873C57.9502 59.7566 58.8425 61.5407 61.0184 62.2851ZM63.023 54.3273C63.5974 54.3401 64.1353 54.6354 64.4775 55.136C65.1619 56.1115 65.1619 57.7159 64.4775 58.6913C64.3553 58.8581 64.2208 58.9994 64.0741 59.1149C63.1818 59.8081 61.9228 59.6155 61.2627 58.6913C60.9448 58.242 60.7738 57.7031 60.7493 57.1382C60.7371 55.3286 61.6785 54.2376 63.023 54.3273Z" fill="url(#paint4_zalo_120_linear_zalo)"></path>
                                    <path d="M69.4032 60.6165C69.4032 61.4252 69.8678 62.1053 70.4789 62.2721C70.6256 62.3106 70.7844 62.3234 70.9311 62.3234C71.7989 62.2976 72.4836 61.5405 72.4712 60.6293C72.4833 58.6399 72.4712 56.6505 72.4712 54.6611C72.4712 52.6589 72.4833 50.6437 72.4712 48.6416C72.4712 47.6149 71.8477 46.973 70.9187 46.986C70.0143 46.986 69.4154 47.6276 69.403 48.6161C69.3908 49.2192 69.403 49.8098 69.403 50.4129L69.4032 60.6165Z" fill="url(#paint5_zalo_120_linear_zalo)"></path>
                                    <defs>
                                        <linearGradient id="paint0_zalo_120_linear_zalo" x1="56.6667" y1="0" x2="56.6667" y2="120" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3185FF"></stop>
                                            <stop offset="1" stop-color="#005BE0"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint1_zalo_120_linear_zalo" x1="60" y1="32" x2="60" y2="88.0003" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                            <stop offset="1" stop-color="#F7F3F2"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint2_zalo_120_linear_zalo" x1="60" y1="32" x2="60" y2="88.0003" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                            <stop offset="1" stop-color="#F7F3F2"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint3_zalo_120_linear_zalo" x1="60" y1="32" x2="60" y2="88.0003" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                            <stop offset="1" stop-color="#F7F3F2"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint4_zalo_120_linear_zalo" x1="60" y1="32" x2="60" y2="88.0003" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                            <stop offset="1" stop-color="#F7F3F2"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint5_zalo_120_linear_zalo" x1="60" y1="32" x2="60" y2="88.0003" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F7F3F2" stop-opacity="0.75"></stop>
                                            <stop offset="1" stop-color="#F7F3F2"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>Zalo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
function imgt(i, id) {
    document.getElementById(i).src = "<?php echo DOMAIN;?>img/t/" + id;
}
</script>