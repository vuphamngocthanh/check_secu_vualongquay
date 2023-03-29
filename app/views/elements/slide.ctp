<div class="homeslide">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div id="myCarousel_8671381491479936" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $slide = $this -> requestAction('/comment/slideshow');?>
                        <?php $i=1; foreach($slide as $slide){?>
                        <div class="item <?php if($i==1){?>active<?php }?>">
                            <a href="<?php echo $slide['Slideshow']['link'];?>">
                                <img src="<?php echo DOMAINAD;?><?php echo $slide['Slideshow']['images'];?>" />
                            </a>
                        </div>
                        <?php $i++;} ?>
                    </div>
                    <a class="left carousel-control hidden-xs" href="#myCarousel_8671381491479936" role="button" data-slide="prev">
                        <img src="<?php echo DOMAIN;?>templates/t1-23/assests/slider/prev-24-icon.svg">
                    </a>
                    <a class="right carousel-control hidden-xs" href="#myCarousel_8671381491479936" role="button" data-slide="next">
                        <img src="<?php echo DOMAIN;?>templates/t1-23/assests/slider/next-24-icon.svg">
                    </a>
                </div>
                <!-- /.carousel -->
                <script>
                //script de chạy slide
                $(document).ready(function() {
                    var owl = $("#slide_8671381491479936");
                    owl.owlCarousel({
                        items: 4, //man hinh rong
                        itemsDesktop: [1000, 4], //desktop
                        itemsDesktopSmall: [900, 3], //table ngang
                        itemsTablet: [600, 2], //
                        itemsMobile: false
                    });
                    // Custom Navigation Events
                    $(".next_8671381491479936").click(function() {
                        owl.trigger('owl.next');
                    })
                    $(".prev_8671381491479936").click(function() {
                        owl.trigger('owl.prev');
                    })
                });
                </script>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="row is-flex home_banner">
                    <?php $advr= $this->requestAction('/comment/advr') ?>
                    <?php foreach($advr as $advs1 ){?>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4">
                        <div class="item-bn">
                            <a href="" data-toggle="modal" data-target="<?php echo $advs1['Advertisement']['link'] ?>">
                                <img src="<?php echo DOMAINAD.$advs1['Advertisement']['images']?>" />
                                <p>
                                    <?php echo $advs1['Advertisement']['name'] ?>
                                </p>
                            </a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
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