<style>
tr{
height:15px;}
tr td input{
height:25px; }
#profile_index {

  color: #000000;
  font-size: 10pt;
  margin: 5px 0;
  overflow: hidden;
  padding-bottom: 30px;
}
#profile_index table input {
    border: 1px solid #22A8E1;
}
#profile_index table a {
    color: #22A8E1;
}
#profile_index table {
    font-size: 12px;
    margin-left: 20px;
}
#profile_index .edit {
    border: 1px solid #ccc;
    border-radius:8px ;
    padding-left: 10px;
    padding-right: 10px;
}

</style>

<div class="content_col" id="block_582">
      <div class="product_box" id="module_1053">
        <div class="title_box">
          <h4>Thông tin thành viên</h4>
        </div>
        <div id="main-register">
     <?php echo $form->create(null, array( 'url' => DOMAIN.'user/edit_profile','type' => 'post','enctype'=>'multipart/form-data','name'=>'image')); ?>
    <div id="profile_index">
    <table width="70%" border="0" cellpadding="0" cellspacing="0">
        <tr><td  style="padding-top:10px;"colspan="2"><h3></h3></td></tr>
        
        <tr>
            <td>Email </td>
            <td >
           
            <?php echo $form->input('User.email',array('value'=>$edit['User']['email'],'label'=>'','style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr ></tr>
        <tr>
            <td>Mật khẩu</td>
            <td>
           
            <?php echo $form->input('User.password',array('label'=>'','value'=>$edit['User']['password'],'type'=>'password','style'=>'width:200px;'))?>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td style="padding-left: 192px;" colspan="2">
            <?php echo $html->link("Thay đổi mật khẩu", "/user/change_pass"); ?>
            
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Tên </td>
            <td>
           
            <?php echo $form->input('User.name',array('label'=>'','value'=>$edit['User']['name'],'style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr></tr>
        <!--<tr>
            <td>Ảnh đại diện </td>
            <td>
           
            <input type="text" style="height:25px;" name="images"  value="<?php echo $edit['User']['images']?>"> &nbsp;<font color="#FF0000"> <a href="javascript:window.open('<?php echo DOMAIN; ?>liblary/upload_images1.php','new_page','width=500,height=300');window.history.go(1)" >[ upload ]</a> </font><font color="#FF0000">*</font>(jpg, jpeg, gif, png)
            </td>
        </tr>-->
        <tr ></tr>
        <tr>
            <td>Ngày sinh</td>
            <td>
           
            <?php echo $form->input('User.birth_date',array('label'=>'','value'=>$edit['User']['birth_date'],'style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Giới tính </td>
            <td>
           <?php if( $edit['User']['sex']==1){
             echo $form->radio('User.sex', array(1 => 'Nam', 0 => 'Nữ'), array('value' => '1','legend'=>'')); 
            }
            if( $edit['User']['sex']==0){
                 echo $form->radio('User.sex', array(1 => 'Nam', 0 => 'Nữ'), array('value' => '0','legend'=>''));
            }
           
           ?>
           
            
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Số điện thoại di động </td>
            <td>
            <?php echo $form->input('User.phone',array('label'=>'','onkeypress'=>'return keypress(event);','value'=>$edit['User']['phone'],'style'=>'width:200px;'));?>
            </td>
        </tr>
        <tr height="25"> </tr>
        <tr>
            <td style="padding-top:10px; padding-left: 192px;" colspan="2">
            <?php echo $form->input('User.id',array('label'=>'','value'=>$edit['User']['id'],'type'=>'hidden'));?>
            <input class="edit" type="submit" value="Cập nhật"/></td>
        </tr>
    </table>
    </div>
     <?php echo $form->end(); ?>
    </div>
   </div>
</div>    
 