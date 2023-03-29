<?php
class ContactsController extends AppController
{ var $name='Contacts';
var $components = array('Email');
var $uses=array('Settings','Contact');
function send()
 {       mysql_query("SET NAMES 'utf8'");

		mysql_query("SET character_set_client=utf8");

		mysql_query("SET character_set_connection=utf8");

		 $x=$this->Settings->read(null,1);

		if($_POST){                      

    

               $content = 'Họ tên khách hàng: '.$_POST['name'].'<br />'.'Số điện thoai: '.$_POST['phone'].'<br />'.'Email: '.$_POST['email'].'<br /> Nội dung liên hệ: '.$_POST['content'];



            	require("phpmailler/class.phpmailer.php");

				$mail = new PHPMailer();				

			    

            	$mail->SMTPAuth = true; // Sử dụng đăng nhập vào account

            	$mail->SMTPSecure = "ssl"; // ssl or tls

            	$username="dvbkns02@gmail.com";

            	$password="bk123456";

            	$start= strpos($username,'@yahoo.com');

            	if(intval($start)==0){

            		$mail->Host = "smtp.gmail.com";

            	}else{

            		$mail->Host = "smtp.mail.yahoo.com";

            	}

                $mail->SMTPDebug = 1;

            	$mail->Port = 465; // Thiết lập cổng gửi email của máy 465 or 587

            	$mail->Username = $username; // SMTP account username

            	$mail->Password = $password; // SMTP account password

            	$mail->IsHTML(true);            	

            	//Thiet lap thong tin nguoi gui va email nguoi gui

            	$mail->SetFrom($_POST['email'],$_POST['name']);  

                //$mail->SetFrom($x['Settings']['email'],'ADMIN');          	 

            	//Thiết lập thông tin người nhận

              	$mail->AddAddress($x['Settings']['email'],'ADMIN');

                //$mail->AddBCC('nt2ungvn@gmail.com');// BCC is just as simple: 

                $mail->AddCC($_POST['email']);

                //$mail->AddAddress($_POST['email'],$_POST['name']);         

                //$mail->AddReplyTo($x['Settings']['email'], 'ADMIN ');      

            	  

            	//Thiết lập tiêu đề 

            	$mail->Subject = $_POST['title'];

            	

            	//Thiết lập định dạng font chữ

            	$mail->CharSet = "utf-8";

            	//Thiết lập nội dung chính của email

            	$mail->Body = $content;

                $this->Contact->create();

				$data['Contact']['title'] = $_POST['title'];

                $data['Contact']['name'] = $_POST['name'];

				$data['Contact']['content'] = $content;				

				$this->Contact->save($data['Contact']);	

                    

                $mail->Send();

                echo '<script language="javascript"> alert("Gửi liên hệ thành công"); location.href="'.DOMAIN.'";</script>';

           
	

}
}
function datcho()
{      mysql_query("SET NAMES 'utf8'");

		mysql_query("SET character_set_client=utf8");

		mysql_query("SET character_set_connection=utf8");

		 $x=$this->Settings->read(null,1);
//print_r($_POST);
		if($_POST){                      

    

               $content = 'Họ tên khách hàng: '.$_POST['name'].'<br />Số điện thoai: '.$_POST['phone'].'<br />Email: '.$_POST['email'].'Số người lớn: '.$_POST['nguoilon'].'<br />Số trẻ em: '.$_POST['treem'].'<br />Ngày: '.$_POST['day'].'/'.$_POST['mon'].'/'.$_POST['year'].'<br />Giờ: '.$_POST['gio'].'<br /> Ghi chú: '.$_POST['content'];



            	require("phpmailler/class.phpmailer.php");

				$mail = new PHPMailer();				

			    

            	$mail->SMTPAuth = true; // Sử dụng đăng nhập vào account

            	$mail->SMTPSecure = "ssl"; // ssl or tls

            	$username="dvbkns02@gmail.com";

            	$password="bk123456";

            	$start= strpos($username,'@yahoo.com');

            	if(intval($start)==0){

            		$mail->Host = "smtp.gmail.com";

            	}else{

            		$mail->Host = "smtp.mail.yahoo.com";

            	}

                $mail->SMTPDebug = 1;

            	$mail->Port = 465; // Thiết lập cổng gửi email của máy 465 or 587

            	$mail->Username = $username; // SMTP account username

            	$mail->Password = $password; // SMTP account password

            	$mail->IsHTML(true);            	

            	//Thiet lap thong tin nguoi gui va email nguoi gui

            	$mail->SetFrom($_POST['email'],$_POST['name']);  

                //$mail->SetFrom($x['Settings']['email'],'ADMIN');          	 

            	//Thiết lập thông tin người nhận

              	$mail->AddAddress($x['Settings']['email'],'ADMIN');

                //$mail->AddBCC('nt2ungvn@gmail.com');// BCC is just as simple: 

                $mail->AddCC($_POST['email']);

                //$mail->AddAddress($_POST['email'],$_POST['name']);         

                //$mail->AddReplyTo($x['Settings']['email'], 'ADMIN ');      

            	  

            	//Thiết lập tiêu đề 

            	$mail->Subject = $_POST['title'];

            	

            	//Thiết lập định dạng font chữ

            	$mail->CharSet = "utf-8";

            	//Thiết lập nội dung chính của email

            	$mail->Body = $content;

                $this->Contact->create();

				$data['Contact']['title'] = $_POST['title'];

                $data['Contact']['name'] = $_POST['name'];

				$data['Contact']['content'] = $content;				

				$this->Contact->save($data['Contact']);	

                    

                $mail->Send();

                echo '<script language="javascript"> alert("Gửi liên hệ thành công"); location.href="'.DOMAIN.'";</script>';

                

}

}
function dathang()
 {      mysql_query("SET NAMES 'utf8'");
		mysql_query("SET character_set_client=utf8");
		mysql_query("SET character_set_connection=utf8");
		 //$x=$this->Helps->read(null,1);
		if(isset($_SESSION['shopingcart']))
		 {   
			 $shopingcart=$_SESSION['shopingcart'];			 
			 $this->set(compact('shopingcart'));
		 }
		 else
		 {
			 echo '<script language="javascript"> alert("Chua co san pham nao trong gio hang"); window.location.replace("'.DOMAIN.'"); </script>';
		 }
		if(isset($_POST['name']))
		{
		$name=$_POST['name']; 
		$mobile=$_POST['phone'];
		$email=$_POST['email'];
		$title=$_POST['title'];
		$content=$_POST['content'];
		
		$images=$_POST['images']; 
		$product_name=$_POST['product_name'];
		$product_sl=$_POST['product_sl'];
		$price=$_POST['price'];
		$total=$_POST['total'];
		$this->Email->from = $name.'<'.$email.'>';
		$this->Email->to = ''; 
		$this->Email->subject = $title;
		$this->Email->template = 'default';
		$this->Email->sendAs = 'both';
		$this->set('name',$name);
		$this->set('mobile',$mobile);
		$this->set('email',$email);
		$this->set('content',$content);
		
		$this->set('images',$images);
		$this->set('product_name',$product_name);
		$this->set('product_sl',$product_sl);
		$this->set('price',$price);
		$this->set('total',$total);
		
		$this->set('sang',array('images','product_name','product_sl','price','total'));
		
		if($this->Email->send())
		{
		        $this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				  echo '<script language="javascript"> alert("Gửi mail thành công"); </script>';
				  unset($_SESSION['shopingcart']);
				  echo '<script language="javascript">location.href="'.DOMAIN.'";</script>';
		  
			}
		else  
		       $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			      echo '<script language="javascript"> alert("gửi mail không thành công"); location.href="'.DOMAIN.'";</script>';
		}
	

}


} ?>
