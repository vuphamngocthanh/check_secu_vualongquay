<style>
    #goi-thieu h1,h2,h3{
   font-size:12px;
   font-weight:normal;
   }
   #main-register input, .text-main input {
   border: 1px solid #CCC;
   border-radius: 5px;
   }
   input {
   padding: 3px;
   margin-bottom: 10px;
   font-size: 14px;
   color: #333;
   }
</style>
<style>
    .cart td {
   border: 1px solid #ccc;
   padding: 7px;
   }
   #goi-thieu h1,h2,h3{
   font-size:12px;
   font-weight:normal;
   }
   table {
   border: 0 none;
   border-spacing: 0;
   }
   #input{
   width:236px;
   border: 1px solid #a0b581;
   height:22px;
   font-weight:normal;
   margin-left:20px;
   }
   .guimail textarea{
   width:336px;
   height:102px;
   font-weight:normal;
   border: 1px solid #ccc;
   }
   .guimail {
   font-weight: bold;
   margin-bottom: 40px;
   width: 100%;
   }
   .tblGrid tr td,.tblGrid tr th {
   border: 1px solid #ccc;
   padding:5px;
   border-spacing: 0;
   }
   .guimail tr td{
   padding-top:10px;
   }
   .bgLLGray th {
   color: #817F80;
   padding-right: 10px;
   text-align: right;
   }
   .guimail .blue{
   color:blue;
   }
</style>
<script>
    function confirmDelete(delUrl)
   {
   if (confirm("Bạn có chắc muốn xóa sản phẩm này không?"))
   {
      document.location = delUrl;
   }
   }
</script>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 giohang">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="clearfix">
                <section class="breadcrumbs clearfix">
                    <a title="Trang chủ" href="<?php echo DOMAIN;?>"><i class="fa fa-home"></i></a>
                    &nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">Giỏ hàng</a>
                </section>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="clearfix">
                <div class="listitem">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if($shopingcart){?>
                            <table id="Form1" class="cart" border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width:100%">
                                <tr class="top">
                                    <td style="text-align: center; width: 6%;"><strong>STT</strong></td>
                                    <td style="width: 30%;"><strong>Tên sản phẩm</strong></td>
                                    <td style="text-align: center; width: 20%;"><strong>Hình ảnh</strong></td>
                                    <td style="text-align: center; width: 10%;"><strong>SL</strong></td>
                                    <td style="text-align: center;width: 20%;"><strong>Giá</strong></td>
                                    <td style="text-align: center;width: 20%;"><strong>Xóa</strong></td>
                                </tr>
                                <?php $total=0; $i=0; foreach($shopingcart as $key=>$product) {?>
                                <?php if($product['name']!=null){?>
                                <tr>
                                    <td align="center">
                                        <?php echo $i+1;?>
                                    </td>
                                    <td align="left">
                                        <?php echo $product['name']; ?>
                                    </td>
                                    <td align="center"><img src="<?php echo DOMAINAD;?><?php echo $product['images']; ?>" width="50" height="50" /></td>
                                    <td>
                                        <form name="view<?php echo $i; ?>" action="<?php echo DOMAIN;?>products/updateshopingcart/<?php echo $key;?>" method="post">
                                            <input style="width:50px;" type="text" name="soluong" value="<?php echo $product['sl']; ?>" />
                                        </form>
                                    </td>
                                    <td class="tal">
                                        <font color="red">
                                            <?php echo number_format( $product['price'],0); ?> đ</font>
                                    </td>
                                    <td class="tal">
                                        <input onclick="document.view<?php echo $i; ?>.submit();" type="image" src="<?php echo DOMAINAD?>images/refresh.png" alt="Cập nhật" />
                                        <a href="javascript:confirmDelete('<?php echo DOMAIN;?>products/deleteshopingcart/<?php echo $key;?>')"><img src="<?php echo DOMAINAD?>images/icons/cross.png" alt="Delete" /></a>
                                    </td>
                                </tr>
                                <?php $total +=$product['total']; $i++; }} ?>
                            </table><br />
                            <div style="float:left; width: 100%;;padding-left: 23px">
                                <?php }else{ echo"<b>Không có sản phẩm trong giỏ</b>";}?>
                            </div>
            </section>
        </div>
    </div>
    <div class="new-cart">
        <ul class="cart-list" style="overflow:hidden; clear:both">
            <li class="tbody bot-cart">
                <div class="col-lg-6">
                    <i class="fa fa-shopping-cart hidden-xs"></i>
                    <div class="bot-info">
                        <p>
                            <?php echo $i;?> Sản phẩm - <strong>Tổng tiền:</strong> <b>
                                <?php echo $total;?> đ</b></p>
                        <p style="color:#999">Phí giao hàng sẽ được tính theo khu vực (or khối lượng hàng)</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--<a href="#" class="cont-cart" onclick="document.getElementById('form-id').submit();">Thanh toán</a>-->
                    <a href="<?php echo DOMAIN?>lien-he-mua-hang" class="cont-cart">Thanh toán</a>
                    <a href="<?php echo DOMAIN?>home" class="back-web">Tiếp tục chọn mua hàng</a>
                </div>
            </li>
        </ul>
    </div>
</div>