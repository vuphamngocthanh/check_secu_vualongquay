<?php echo $this->Html->css('validationEngine.jquery');?>
<script type="text/javascript" src="<?php echo DOMAIN;?>js/jquery.validationEngine.js"></script>
<!-- <script>
  $(document).ready(function(){
    $("#check_form").validationEngine();
  });
</script> -->

 <?php if($session->read('lang')==1){?>
 <form method="post" id="check_form" action="<?php echo DOMAIN; ?>contacts/send" style=";">
 <div class="row">
<div class="col-lg-12 col-md-12 col-xs-12"></div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <input type="text" id="name" name="name" placeholder="Họ tên" class="validate[required] input-contact">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <input type="text" id="phone" name="phone" placeholder="Điện thoại" class="validate[required,custom[telephone]] input-contact">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <input type="text" id="address" name="address" placeholder="Địa chỉ" class="input-contact">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <input type="text" id="email" name="email" placeholder="Email" class="validate[required,custom[email]] input-contact">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <input type="text" id="title" name="title" placeholder="Tiêu đề" class="validate[required] input-contact">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <textarea id="content" name="content" placeholder="Nội dung" class="textarea"></textarea>
    </div>
	<input type="submit" value="Gửi đi" class="submit">
</div>
</form>
 <?php }if($session->read('lang')==2){?>
 <form method="post" id="check_form" action="<?php echo DOMAIN; ?>contacts/send">
    <table class="guimail" align="left" width="600px">
        <tr><td>Full name</td><td><input id="input" name="name" class="validate[required]" type="text"></td></tr>
        <tr><td>Phone</td><td><input id="input" type="text" class="validate[required,custom[telephone]]" name="phone"></td></tr>
        <tr><td>Email</td><td><input id="input" type="text"  class="validate[required,custom[email]]" name="email"></td></tr>
        <tr><td>Title</td><td><input id="input" type="text" class="validate[required]" name="title"></td></tr>
        <tr><td>Content</td><td><textarea name="content" cols="45" rows="10"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value=" Send " class="submit">&nbsp;<input type="reset" value=" Reset " class="submit"></td></tr>
    </table>
</form>
 <?php }?>