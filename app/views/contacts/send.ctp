<style>
#goi-thieu h1,
h2,
h3 {
    font-size: 12px;
    font-weight: normal;
}

#main-register input,
.text-main input {
    border: 1px solid #CCC;
    border-radius: 5px;
}

input {
    padding: 1px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;

}
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="clearfix">
                <section class="breadcrumbs clearfix">
                    <a title="Trang chủ" href="<?php echo DOMAIN;?>"><i class="fa fa-home"></i></a>
                    &nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">Liên hệ</a>
                </section>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="clearfix">
                <section id="post">
                    <div class="postitem">
                        <div class="row">
                            <article class="col-lg-12">
                                
                                <?php echo $this->element('plugin/plugin-contac');?>
                            </article>
                        </div>
                        <!--End Row-->
                    </div>
                </section>
                <!--End listitem-->
            </section>
        </div>
    </div>
</div>