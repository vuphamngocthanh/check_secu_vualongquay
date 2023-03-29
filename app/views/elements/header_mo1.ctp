<!--icon menu su dụng trong giao diện mobile-->
<section class="row-section top-logo top-search top-html " style='background:#fff !important;'>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="logo">
					<?php $banner = $this -> requestAction('/comment/banner');?>
					<?php foreach($banner as $banner){ ?>
					<a href="<?php echo DOMAIN;?>" title="banner"><img src="<?php echo DOMAINAD?><?php echo $banner['Banner']['images'];?>" style="max-width: 100%; max-height:100%" /></a>
					<?php }?>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style='height: 53px !important'>
				<form class="search" action="<?php echo DOMAIN;?>products/search" method="post" style='height: 53px !important'>
					<input name="name_search" placeholder="Từ khóa tìm kiếm..." class="search_query" type="text" />
					<span><i class="fa fa-search fa-lg"></i></span>
				</form>
			</div>

			<!--
          <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                <div id="top-cart" class="top-cart-block col-mds-1 nopadding" style="padding:25px 0px 5px 0px !important; ">
                    <a href="<?php echo DOMAIN;?>xem-gio-hang" id="top-cart-trigger"><img src="<?php echo DOMAIN;?>images/cart_bg.png" />
                        <span class="top_cart_qty">
                            <?php if(isset($shopingcart)){echo count($shopingcart);}else{echo '0';}?></span>
                    </a>

                </div>
            </div>
-->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
				<!-- <div class="shipping dkdn">
					<div class="desi">
						<p>
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
						</p>
						<span>
							<a href="http://foum.rtctechnology.com.vn/">Đăng ký</a>
							<a href="http://foum.rtctechnology.com.vn/">Đăng nhập</a></span>
					</div>
				</div> -->
				<div id="top-cart" class="top-cart-block col-mds-1 nopadding" style="padding:25px 0px 5px 0px !important; ">
                    <a href="<?php echo DOMAIN;?>xem-gio-hang" id="top-cart-trigger"><img src="<?php echo DOMAIN;?>images/cart_bg.png" />
                        <span class="top_cart_qty">
                            <?php if(isset($shopingcart)){echo count($shopingcart);}else{echo '0';}?></span>
                    </a>

                </div>
				<?php $setting = $this->requestAction('/comment/setting'); ?>
				<?php foreach ($setting as $settings) { ?>
				<div class="shipping">
					<div class="im"><img src="<?php echo DOMAIN;?>img/icon-mobile.png">
					</div>
					<div class="desi">
						<p>Hotline</p>
						<span>
							<?php echo $settings['Setting']['mobile'];?></span>

					</div>
				</div>
				<!-- <div class="shipping hidden-md hidden-sm hidden-xs">
					<div class="im"><img src="<?php echo DOMAIN;?>img/icon-clock.png">
					</div>
					<div class="desi">
						<p>Giờ mở cửa</p>
						<span><?php echo $settings['Setting']['address'];?></span>
					</div>
				</div> -->
				<?php }?>
			</div>

		</div>
	</div>
</section>

<link href="<?php echo DOMAIN ?>google-language-translator/css/style.css?ver=4.1" rel="stylesheet" type="text/css" />

<script type='text/javascript' src='<?php echo DOMAIN;?>google-language-translator/js/flags.js?ver=4.1'></script>
<style type="text/css">
	#google_language_translator,
	#flags {
		text-align: left;
	}

	#google_language_translator,
	#language {
		clear: both;
		width: auto !important;
		text-align: right;
	}

	#language {
		float: right;
	}

	#flags {
		clear: right;
		float: right;
		margin-top: 7px;
		text-align: right;
		width: 50px;
	}

	#flags ul {
		float: right !important;
	}

	.glt-clear {
		height: 0px;
		clear: both;
		margin: 0px;
		padding: 0px;
	}

	#flags {
		width: 50px;
	}

	#flags a {
		display: inline-block;
		margin-left: 2px;
	}

	.goog-tooltip {
		display: none !important;
	}

	.goog-tooltip:hover {
		display: none !important;
	}

	.goog-text-highlight {
		background-color: transparent !important;
		border: none !important;
		box-shadow: none !important;
	}

	#google_language_translator a {
		display: none !important;
	}

	.goog-te-gadget {
		color: transparent !important;
	}

	.goog-te-gadget {
		font-size: 0px !important;
	}

	.goog-branding {
		display: none;
	}

	#google_language_translator {
		display: none;
	}

	.goog-te-banner-frame {
		visibility: hidden !important;
	}

	body {
		top: 0px !important;
	}
</style>
<script>
	jQuery(document).ready(function($) {
		$("a.flag").on("click", function() {
			default_lang = "vi";
			lang_prefix = $(this).attr("class").split(" ")[2];

			if (lang_prefix == default_lang) {
				load_default();
			} else {
				load_selected_language();
			}

			function load_default() {
				doGoogleLanguageTranslator(default_lang + "|" + default_lang);
			}

			function load_selected_language() {
				doGoogleLanguageTranslator(default_lang + "|" + lang_prefix);
			}
		});

		if ($("body > #google_language_translator").length == 0) {
			$("#glt-footer").html("<div id='google_language_translator'></div>");
		}
	});
</script>

<div id='glt-footer'></div>
<script type='text/javascript'>
	function GoogleLanguageTranslatorInit() {
		new google.translate.TranslateElement({
			pageLanguage: 'vi',
			autoDisplay: false
		}, 'google_language_translator');
	}
</script>
<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit'></script>