<style>
tr{
height:15px;}

#profile_index {
    color: #000000;
    font-size: 10pt;
    margin: 10px 0;
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
    padding: 8px;    
}

</style>
<div class="content_col" id="block_582">
      <div class="product_box" id="module_1053">
        <div class="title_box">
          <h4>Đổi password</h4>
        </div>
        <div id="main-register">

	<?php echo $form->create(null, array( 'url' => DOMAIN.'user/confirm_pass','type' => 'post')); ?>	
    <div id="profile_index">
    <table>
        <tr><td  style="padding:20px; padding-left:200px;"colspan="2"><h3>Thay đổi Password</h3></td></tr>
        
        <tr>
            <td>Email </td>
            <td >
            
            <?php echo $this->Form->input('User.email',array('label'=>'','value'=>$edit['User']['email'],'readonly'=>'true','style'=>'width:250px;height:25px;'));?>
            </td>
        </tr>
        <tr height="25"></tr>
        <tr>
            <td>Mật khẩu cũ</td>
            <td>
            
            <?php echo $this->Form->input('User.password_old',array('label'=>'','type'=>'password','style'=>'width:250px;height:25px;'));?>
            </td>
        </tr>
        <tr height="25"></tr>
        <tr>
            <td>Mật khẩu mới</td>
            <td>
            
            <?php echo $this->Form->input('User.password',array('label'=>'','type'=>'password','style'=>'width:250px;height:25px;'));?>
            </td>
        </tr>
        <td>
             <?php echo $this->Form->input('User.id',array('label'=>'','value'=>$edit['User']['id'],'typy'=>'hidden'));?>
        </td></tr>
        <tr>
            <td style="padding-left:170px; padding-top:10px;" colspan="2"><input class="edit" type="submit" value="Cập nhật"/></td>
        </tr>
    </table>
    </div>
  <?php echo $form->end(); ?>
 </div>
   </div>
</div>   