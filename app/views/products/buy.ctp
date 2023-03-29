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
    .cart td th{
   border:1px solid gray !important;
   padding: 8px;
   text-align: center;
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
<script type="text/javascript">
$().ready(function() {
    // validate signup form on keyup and submit
    $("#signupForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            phone: {
                required: true,
            },
            address: {
                required: true,
            },

            agree: "required"
        },
        messages: {
            name: {
                required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px;' >Xin vui lòng nhập tên !</span>",
                minlength: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px; ' > Tên lớn hơn 2 ký tự !</span>"
            },
            phone: {
                required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px;' >Xin vui lòng nhập số điện thoại để chúng tôi liên lạc khi giao hàng !</span>",

            },
            address: {
                required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px;' >Xin vui lòng nhập số địa chỉ để chúng tôi liên lạc khi giao hàng !</span>",

            },
            
        }
    });
});
</script>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 giohang">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="clearfix">
                <section class="breadcrumbs clearfix">
                    <a title="Trang chủ" href="<?php echo DOMAIN;?>"><i class="fa fa-home"></i></a>
                    &nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">Thanh toán</a>
                </section>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="clearfix">
                <table class="tblGrid cart">
                    <tr class="top">
                        <th width="5%">STT</th>
                        <th width="10%">Hình ảnh </th>
                        <th width="25%">Tên </th>
                        <th width="10%">Số lượng</th>
                        <th width="25%">Giá</th>
                        <th width="25%">Tổng giá</th>
                    </tr>
                    <?php $i=1; $total=0; foreach($shopingcart as $key=>$product) {?>
                    <?php if($product['name']!=null){?>
                    <tr>
                        <td align="">
                            <?php echo $i;?>
                        </td>
                        <td align="center"><img width="70" src="<?php echo DOMAINAD;?><?php echo $product['images']; ?>" /></td>
                        <td>
                            <?php echo $product['name']; ?>
                        </td>
                        <td align="center">
                            <?php echo $product['sl']; ?>
                        </td>
                        <td align="center">
                            <font color="red">
                                <?php echo number_format($product['price'],0); ?> VNĐ</font>
                        </td>
                        <td align="center">
                            <font color="red">
                                <?php echo number_format($product['total'],0); ?> VNĐ</font>
                        </td>
                    </tr>
                    <?php $total += $product['total']; $i++;} }
                        
                     echo '<tr><td align="right" colspan="6"><b>Tổng giá sản phẩm (Đã bao gồm VAT):</b> <font color="red">'.number_format($total,0).' VNĐ </font></td></tr>';
                    ?>
                </table>
                <br />
                <div style="clear: both;background: #ffe4dd;padding:5px;color: #b52427"><strong>Thông tin đặt hàng</strong></div>
                <form name="check_form" id="signupForm" method="post" action="<?php echo DOMAIN;?>thanh-toan">
                    <input class="contacts" type="hidden" value="<?php echo $total; ?>" name="total" />
                    <?php if ($this->Session->read('name')) {?>
                    <table class="tbl bgLLGray bdLGray wf mt10 pb20 guimail">
                        <tbody>
                            <tr>
                                <th class="w160 vam">Họ tên đầy đủ</th>
                                <td>
                                    <input type="text" title="" name="name" id="Name" value="<?php echo $this->Session->read('name'); ?>" class="validate[required] inputText w200 input-validation-error blur">
                                </td>
                            </tr>
                            <tr>
                                <th>Địa chỉ Email</th>
                                <td>
                                    <input type="text" value="<?php echo $this->Session->read('email'); ?>" title="" name="email" id="Email" class="validate[required,custom[email]] inputText w200 valid">
                                </td>
                            </tr>
                            <tr>
                                <th>Điện thoại di động</th>
                                <td>
                                    <input type="text" title="(xx)xxx&ndash;xxxxx" name="phone" value="<?php echo $this->Session->read('phone'); ?>" id="Mobile" data-val="true" class="validate[required,custom[telephone]] inputText w200 valid"><span style="color:#F00;">(*)</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>
                                    <input type="text" value="" name="address" id="FullAddress" class="validate[required] inputText w500 valid"><span style="color:#F00;">(*)</span>
                                    <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="FullAddress" class="field-validation-valid"></span></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Hình thức thanh toán</th>
                                <td>
                                    <select name="bank" id="payop">
                                        <option value="0">Thanh toán tiền mặt</option>
                                        <option value="1">Thanh toán chuyển khoản</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php }else{?>
                    <table class="tbl bgLLGray bdLGray wf mt10 pb20 guimail">
                        <tbody>
                            <tr>
                                <th class="w160 vam">Họ tên đầy đủ</th>
                                <td>
                                    <input type="text" value="" title="" name="name" id="Name" data-val-required="" data-val-length-max="50" data-val-length="" data-val="true" class="validate[required] inputText w200 input-validation-error blur">
                                </td>
                            </tr>
                            <tr>
                                <th>Địa chỉ Email</th>
                                <td>
                                    <input type="text" value="" title="" name="email" id="Email" data-val-regex-pattern=".+\@.+\..+" data-val-regex="" data-val-length-max="100" data-val-length="" data-val="true" class="validate[required,custom[email]] inputText w200 valid">
                                    <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="Email" class="field-validation-valid"></span></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Điện thoại di động</th>
                                <td>
                                    <input type="text" value="" title="(xx)xxx&ndash;xxxxx" name="phone" id="Mobile" name="" data-val="true" class="validate[required,custom[telephone]] inputText w200 valid">
                                    <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="Mobile" class="field-validation-valid"></span></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>
                                    <input type="text" value="" name="address" id="FullAddress" class="validate[required] inputText w900 valid">
                                    <div class="cb"><span data-valmsg-replace="true" data-valmsg-for="FullAddress" class="field-validation-valid"></span></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Hình thức thanh toán</th>
                                <td>
                                    <select name="bank" id="payop">
                                        <option value="0">Thanh toán tiền mặt</option>
                                        <option value="1">Thanh toán chuyển khoản</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php }?>
                    <div class="pt20 tar">
                        <input type="submit" class="dathang" value="Đặt hàng" id="btnPlaceOrder1" />
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>