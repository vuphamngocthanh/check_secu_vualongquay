<script>
function confirmDelete(delUrl)
{
if (confirm("Bạn có muốn xóa danh mục này không!"))
{
	document.location = delUrl;
}
}
</script>
<?php echo $form->create(null, array( 'url' => DOMAINAD.'products/search','type' => 'post','enctype'=>'multipart/form-data','name'=>'image')); ?>
<br />
<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
                    <ul>
                        <li id="toolbar-new">
                            <a href="<?php echo DOMAINAD?>products/add" class="toolbar">
                                <span class="icon-32-new"></span>
                                Thêm mới
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li id="toolbar-help">
                            <a href="#messages" rel="modal" class="toolbar">
                                <span class="icon-32-help"></span>
                                Trợ giúp
                            </a>
                        </li>
                        <li id="toolbar-unpublish">
                            <a href="<?php echo DOMAINAD?>home" class="toolbar">
                                <span class="icon-32-unpublish"></span>
                                Đóng
                            </a>
                        </li>
                    </ul>
                    <div class="clr"></div>
                </div>
        <div class="pagetitle icon-48-nhomtin"><h2>Sản phẩm</h2></div>
		<div class="clr"></div>
	</div>
</div>
<div class="content-box">
    <div class="content-box-header">
        <table class="timkiem">
        	<tr>
            	<td valign="top">Tìm kiếm</td>
            	<td><input type="text" id="field2c" name="keyword" value="" class="text-input"></td>

                <td>
                <select style="margin-left:15px;" name="system">
                           <option value="">-- Danh mục --</option>
                            <?php foreach($cat as $Catproduct) {?>
                            <?php if($Catproduct['Catproduct']['parent_id']==null){?>
                             <option value="<?php echo $Catproduct['Catproduct']['id']; ?>"><?php echo $Catproduct['Catproduct']['name']; ?></option>
                             <?php foreach($catcon as $Catproducts) {?>
                             <?php if($Catproducts['Catproduct']['parent_id']==$Catproduct['Catproduct']['id']){?>
                             <option value="<?php echo $Catproducts['Catproduct']['id']; ?>">--<?php echo $Catproducts['Catproduct']['name']; ?></option>
                             <?php foreach($catconn as $values) {?>
                             <?php if($values['Catproduct']['parent_id']==$Catproducts['Catproduct']['id']){?>
                             <option value="<?php echo $values['Catproduct']['id']; ?>">----<?php echo $values['Catproduct']['name']; ?></option>
                             <?php foreach($catconnn as $value) {?>
                             <?php if($value['Catproduct']['parent_id']==$values['Catproduct']['id']){?>
                             <option value="<?php echo $value['Catproduct']['id']; ?>">------<?php echo $value['Catproduct']['name']; ?></option>
                            <?php }}}}}}}}?>
                 </select>
                </td>
                    <td><input type="submit" name="" value="Tìm kiếm" class="button" /></td>
            </tr>
        </table>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Danh sách</a></li> 
            <li><a href="#tab2"></a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <?php echo $form->end(); ?>
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
            <table>
            <form action="<?php echo DOMAINAD; ?>products/processing" name="form1" method="post">
            	<thead>
                    <tr>
                       <th width="1%"><input class="check-all" type="checkbox" /></th>
                       <th width="2%">STT</th>
                       <th><?php echo $this->Paginator->sort('Tên bài viết','id');?></th>
                       
                       <th>Danh mục cha</th>                      
                       <th width="7%"><?php echo $this->Paginator->sort('Cập nhật','modified');?></th>
                       <th width="10%">Giá</th>
                       <th width="8%">Xử lý</th>
                       <th width="3%">Sxếp</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <td colspan="6">
                             <div class="bulk-actions align-left">
                                <select name="dropdown">
                                    <option value="option1">----- Lựa chọn -----</option>
                                    <option value="price">+ Cập nhật giá SP</option>
                                    <option value="active">+ Active</option>
                                    <option value="notactive">+ Hủy Active</option>
                                    <option value="delete">+ Delete</option>
                                </select>
                                <a class="button" href="#" onclick="document.form1.submit();">Thực hiện</a>
                            </div>
                             <div class="pagination">
                                <a href="#" title="First Page">
                                   <?php
                                        $paginator->options(array('url' => $this->passedArgs));
                                       echo "&laquo "; echo $paginator->prev('Về trước');
							       ?> 
                                </a>
							     <?php 
								   echo $paginator->numbers();
                                   echo $paginator->next('Tiếp theo'); echo "&raquo";
                                ?>
                              </div>
                            </div> 
                            <div class="clear"></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                   <?php  foreach ($product as $key =>$value){?>
                    <tr>
                        <td><input type="checkbox" name="<?php echo $value['Product']['id'] ?>" /></td>
                        <td><?php $j=$key+1; echo $j;?></td>
                        <td><a href="<?php echo DOMAINAD?>products/edit/<?php echo $value['Product']['id'] ?>" title="Edit"><?php echo $value['Product']['title']; ?></a></td>
           
                        <td><?php  echo $value['Catproduct']['name'];?></td>
                        
                        <td><?php echo date('d-m-Y', strtotime($value['Product']['created'])); ?></td>
                        <td><input type="text" name="price<?php echo $value['Product']['id'];?>" value="<?php echo $value['Product']['price'];?>" size="15"/></td>
                        <td>
                             <a href="<?php echo DOMAINAD?>products/edit/<?php echo $value['Product']['id'] ?>" title="Edit"><img src="<?php echo DOMAINAD?>images/icons/pencil.png" alt="Edit" /></a>
                             <a href="javascript:confirmDelete('<?php echo DOMAINAD?>products/delete/<?php echo $value['Product']['id'] ?>')" title="Delete"><img src="<?php echo DOMAINAD?>images/icons/cross.png" alt="Delete" /></a>
                        <?php 
							if($value['Product']['status']==0)
							{
						?>
                             <a href="<?php echo DOMAINAD?>products/active/<?php echo $value['Product']['id'] ?>" title="Kích hoạt" class="icon-5 info-tooltip"><img src="<?php echo DOMAINAD?>images/icons/Play-icon.png" alt="Kích hoạt" /></a>
                        <?php 
							}else 
							{
						?>
                            <a href="<?php echo DOMAINAD?>products/close/<?php echo $value['Product']['id'] ?>" title="Đóng" class="icon-4 info-tooltip"><img src="<?php echo DOMAINAD?>images/icons/success-icon.png" alt="Ngắt kích hoạt" /></a>
                        <?php 
							}
						?>
                        </td>
                        <td align="center"><?php echo $value['Product']['char'];?></td>
                    </tr>
                   <?php }?>
                </tbody>
                </form>
            </table>
        </div> <!-- End #tab1 -->
        <!-- End #tab2 -->        
    </div> <!-- End .content-box-content -->
 </div>
