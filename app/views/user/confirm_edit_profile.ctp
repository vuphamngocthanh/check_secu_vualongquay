﻿<style>
tr{
height:15px;}
tr td input{
height:25px; }
#profile_index {
    border: 1px solid #0066FF;
    border-radius: 8px 8px 8px 8px;
    color: #000000;
    font-size: 10pt;
    margin: 10px auto 20px;
    overflow: hidden;
    padding-bottom: 30px;
    width: 98%;
}
#profile_index table {
    font-size: 12px;
    margin-left: 20px;
}

</style>
<div id="main">
    <div id="content">
       <div class="title"><h1>Thông tin cá nhân</h1></div>
       <div id="text-main">
<?php echo $form->create(null, array( 'url' => DOMAIN.'user/edit_profile','type' => 'post','enctype'=>'multipart/form-data','name'=>'image')); ?>
    <div id="profile_index">
    <table>
        <tr>
          <td></td>
        </tr>
        <tr>
            <td>Email </td>
            <td>
           
            <?php
            echo $edit['User']['email'];
             echo $form->input('User.email',array('value'=>$edit['User']['email'],'label'=>'','type'=>'hidden','style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr ></tr>
        <tr>
            <td>Mật khẩu</td>
            <td>
           
            <?php echo '**********';
			 echo $form->input('User.password',array('label'=>'','type'=>'hidden','value'=>$edit['User']['password'],'style'=>'width:200px;'));
			?>
            
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Tên </td>
            <td>
           
            <?php 
           echo $edit['User']['name'];
            echo $form->input('User.name',array('label'=>'','type'=>'hidden','value'=>$edit['User']['name'],'style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Ngày sinh</td>
            <td>
            <?php 
			  echo $edit['User']['birth_date'];
			  echo $form->input('User.birth_date',array('label'=>'','type'=>'hidden','value'=>$edit['User']['birth_date'],'style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Giới tính </td>
            <td>
           <?php if( $edit['User']['sex']==0){		 
                echo 'Nữ ';
               echo $form->input('User.sex',array('label'=>'','value'=>$edit['User']['sex'],'type'=>'hidden','style'=>'width:200px;'));
             
            }
            if( $edit['User']['sex']==1){
                echo 'Nam';
               echo $form->input('User.sex',array('label'=>'','type'=>'hidden','value'=>$edit['User']['sex'],'style'=>'width:200px;'));
            }
           
           ?>
           
            
            </td>
        </tr>
        <tr ></tr>
        <tr>
            <td>Số điện thoại</td>
            <td>
            <?php 
             echo $edit['User']['phone'];
            echo $form->input('User.phone',array('label'=>'','onkeypress'=>'return keypress(event);','type'=>'hidden','value'=>$edit['User']['phone'],'style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr height="25"> </tr>
        
        <tr></tr>
        
        <?php echo $form->input('User.id',array('label'=>'','value'=>$edit['User']['id'],'type'=>'hidden'));?>
        </td></tr>
        <tr>
            <td style="padding-left:170px; padding-top:10px;" colspan="2">
            <input class="submit" style=" cursor:pointer; width:55px; -moz-border-radius: 5px 5px 5px 5px; -webkit-border-radius: 5px 5px 5px 5px;background:#1886b5; color:#FFF;"type="submit"  value="Sửa" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="submit" style=" cursor:pointer; margin:-left:20px; width:55px; -moz-border-radius: 5px 5px 5px 5px; -webkit-border-radius: 5px 5px 5px 5px;background:#1886b5; color:#FFF;" type="button" name = "" value="Trở lại" onclick ="history.go(-1);" />
            </td>
            
        </tr>
    </table>
    </div>
 <?php echo $form->end(); ?>
    </div>
</div>
