<link href="<?php echo DOMAIN ?>css/login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo DOMAIN ?>css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo DOMAIN ?>js/jquery.validate.js"></script>
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
.checklogin td {
  height: 35px;
  line-height: 35px;
}
</style>
<script type="text/javascript">
$().ready(function() {
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
				password: {
				required: true,
				minlength: 5
			},
			
			email: {
				required: true,
				email: true
			},
			
			agree: "required"
		},
		messages: {
				password: {
				required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px;' >Xin vui lòng nhập password !</span>",
				minlength: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px; ' > password lớn hơn 5 ký tự !</span>"
			},
			
			email:{
						required: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px;' >Xin vui lòng nhập Email</span> ",
                        email: "<span style='color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:11px;margin:5px; ' > Email không đúng !"

			}
		}
	});
});
</script>
<div class="content_col" id="block_582">
      <div class="product_box" id="module_1053">
        <div class="title_box">
          <h4>Đăng nhập</h4>
        </div>
        <div id="main-register">
    <div class="clearfix" ></div> 
         <form id="signupForm" method="POST" action="<?php echo DOMAIN?>login/check_login" class="checklogin">
                <table style="padding:10px 200px;">
                <tr>
                <td>Email:</td>
                <td><input type="text" name="email" class="login-new-input" /></td>
                </tr>
                <tr>                
                <td>Mật khẩu:</td>
                <td><input type="password" name="password" class="login-new-input" /></td>
                </tr>
                <tr>
                <td></td>
                    <td><input type="submit" value="Đăng nhập" /></td>
                </tr>
                </table>
        </form>
        </div>

</div>
</div>