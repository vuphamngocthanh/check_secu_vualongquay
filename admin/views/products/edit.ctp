<?php echo $form->create(null, array( 'url' => DOMAINAD.'products/edit','type' => 'post','name' => 'adminForm', 'inputDefaults' => array('label' => false,'div' => false))); ?>
<br />
<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
			<ul>
				<li id="toolbar-new">
					<a href="javascript:void(0);" onclick="javascript:document.adminForm.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
					</a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.adminForm.reset();">
                    <span class="icon-32-refresh">
                    </span>
                    Reset
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
                    <a href="<?php echo DOMAINAD?>products" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
		<div class="pagetitle icon-48-nhomtin"><h2>Quản lý sản phẩm</h2></div>
		<div class="clr"></div>
	</div>
</div>
<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">
        <h3>Sửa sản phẩm</h3>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Sửa</a></li> <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2"></a></li>
        </ul>
        <div class="clear"></div>
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        	<table class="input">
               	<tr>
                   	<td width="120" class="label">Tên sản phẩm:</td>
                    <td>
                    <?php echo $this->Form->input('Product.title',array('class'=>'text-input medium-input datepicker','maxlength' => '250','onchange' => 'get_alias()','id' => 'idtitle'));?>
                    </td>
                </tr>
                <tr>
                   	<td width="120" class="label">Mã sản phẩm:</td>
                    <td>
                    <?php echo $this->Form->input('Product.code',array('class'=>'text-input medium-input datepicker','maxlength' => '250','style' => 'width:200px !important'));?>
                    </td>
                </tr> 
                <tr>
                   	<td width="120" class="label">Bảo hành</td>
                    <td>
                    <?php echo $this->Form->input('Product.title_en',array('class'=>'text-input medium-input datepicker','maxlength' => '250'));?>
                    </td>
                </tr>
                <tr>
                  	<td class="label">Liên kết tĩnh:</td>
                    <td>
                    <?php echo $this->Form->input('Product.alias',array('class'=>'text-input alias-input datepicker','maxlength' => '250','id' => 'idalias'));?>
                    <img width="16" height="16" alt="" onclick="get_alias();" style="cursor: pointer; vertical-align: middle;" src="<?php echo DOMAINAD; ?>images/refresh.png">
                    </td>
                </tr>
               
                <tr>
                  	<td class="label">Thuộc danh mục:</td>
                    <td><?php echo $this->Form->input('catproduct_id',array('type'=>'select','options'=>$list_cat,'empty'=>'Chọn danh mục','class'=>'small-input','label'=>''));?></td>
                </tr>
                <tr>
                  	<td class="label">Sắp xếp:</td>
                    <td>
                    <?php echo $this->Form->input('char',array('class'=>'text-input','maxlength' => '20'));?>
                    </td>
                </tr>
                <tr>
                	<td class="label"></td>
                	<td>
                		<?php echo $this->Form->input('Product.sptieubieu',array('type'=>'checkbox','style'=>'float:left; margin-left:10px;','label'=>'Sản phẩm tiêu biểu'));?>
                        <br />
<!--                        <?php echo $this->Form->input('Product.spkuyenmai',array('type'=>'checkbox','style'=>'float:left; margin-left:10px;','label'=>'Sản phẩm mới về'));?>-->
                	<!--<br />
                		<?php echo $this->Form->input('Product.display',array('type'=>'checkbox','style'=>'float:left; margin-left:10px;','label'=>'Sản phẩm khuyến mại'));?>
                    -->    
                	</td>
                </tr>
                <tr>
                   	<td width="120" class="label">Tình trạng:</td>
                    
                    <td>
                    <?php echo $this->Form->input('Product.kichthuoc',array('class'=>'text-input medium-input datepicker','maxlength' => '250','style' => 'width:200px !important'));?>
                    </td>
                </tr>
                <!--
                <tr>
                    <td width="120" class="label">Hãng sản xuất</td>  
                    <td><?php echo $this->Form->input('manufacturer',array('type'=>'select','options'=>$list_cat1,'empty'=>'Chọn hãng sản xuất','class'=>'small-input','label'=>''));?>
                    </td>
                </tr>--> 
                <tr>
                   	<td width="120" class="label">Xuất sứ:</td>
                    
                    <td>
                    <?php echo $this->Form->input('Product.donvi',array('class'=>'text-input medium-input datepicker','maxlength' => '250','style' => 'width:200px !important'));?>
                    </td>
                </tr>
                <tr>
                   	<td width="120" class="label">Giá sản phẩm cũ:</td>
                    <td>
                    <?php echo $this->Form->input('Product.price_cu',array('class'=>'text-input medium-input datepicker','maxlength' => '250','style' => 'width:200px !important'));?>
                    </td>
                </tr> 
                <tr>
                   	<td width="120" class="label">Giá sản phẩm:</td>
                    <td>
                    <?php echo $this->Form->input('Product.price',array('class'=>'text-input medium-input datepicker','maxlength' => '250','style' => 'width:200px !important'));?>
                    </td>
                </tr>    
                <!--<tr>
                   	<td width="120" class="label">Giá sản phẩm cũ:</td>
                    <td>
                    <?php echo $this->Form->input('Product.price_cu',array('class'=>'text-input medium-input datepicker','maxlength' => '250','style' => 'width:200px !important'));?>
                    </td>
                </tr> -->        
               <tr >
                   	<td width="120" class="label">Thuộc khoản giá</td>
                    <td>
                    <?php echo $form->select('Product.khoanggia',$gia);?>
                    </td>
                </tr>  
               <tr>
                    <td class="label">Hình ảnh cũ:</td>
                    <td><img src="<?php echo DOMAINAD?><?php echo $edit['Product']['images']?>" width="200"/></td>
                </tr>
                <tr>
                  	<td class="label">Ảnh sản phẩm 1(Đặt làm ảnh đại diện):</td>
                    <td>
                        <?php echo $this->Form->input('Product.images',array('class'=>'text-input image-input datepicker','name' => 'userfile1'));?> &nbsp;<font color="#FF0000"> <a href="javascript:window.open('<?php echo DOMAINAD; ?>upload.php?ids=1','userfile1','width=500,height=300');window.history.go(1)" >[ upload ]</a> </font><font color="#FF0000">*</font>(jpg, jpeg, gif, png)
                    </td>
                </tr>
                <!--<tr>
                    <td class="label">Ảnh sản phẩm 2:</td>
                    <td>
                        <?php echo $this->Form->input('Product.images1',array('class'=>'text-input image-input datepicker','name' => 'userfile2'));?> &nbsp;<font color="#FF0000"> <a href="javascript:window.open('<?php echo DOMAINAD; ?>upload.php?ids=2','userfile2','width=500,height=300');window.history.go(1)" >[ upload ]</a> </font><font color="#FF0000">*</font>(jpg, jpeg, gif, png)
                    </td>
               </tr>
               <tr>
                    <td class="label">Ảnh sản phẩm 3:</td>
                    <td>
                        <?php echo $this->Form->input('Product.images2',array('class'=>'text-input image-input datepicker','name' => 'userfile3'));?> &nbsp;<font color="#FF0000"> <a href="javascript:window.open('<?php echo DOMAINAD; ?>upload.php?ids=3','userfile3','width=500,height=300');window.history.go(1)" >[ upload ]</a> </font><font color="#FF0000">*</font>(jpg, jpeg, gif, png)
                    </td>
               </tr>
               <tr>
                    <td class="label">Ảnh sản phẩm 4:</td>
                    <td>
                        <?php echo $this->Form->input('Product.images3',array('class'=>'text-input image-input datepicker','name' => 'userfile4'));?> &nbsp;<font color="#FF0000"> <a href="javascript:window.open('<?php echo DOMAINAD; ?>upload.php?ids=4','userfile4','width=500,height=300');window.history.go(1)" >[ upload ]</a> </font><font color="#FF0000">*</font>(jpg, jpeg, gif, png)
                    </td>
               </tr>
              <tr>
                	<td class="label">Tóm tắt (Tiếng Việt)</td>
                    <td>
					 <?php  echo $this->Form->input('introduction').$this->TvFck->create('Product.introduction',array('height'=>'100px','width'=>'750px')); ?>
                     </td>
                </tr>
                <tr>
                	<td class="label">Tóm tắt (Tiếng Anh)</td>
                    <td>
					 <?php  echo $this->Form->input('introduction_en').$this->TvFck->create('Product.introduction_en',array('height'=>'100px','width'=>'750px')); ?>
                     </td>
                </tr>-->
                <tr>
                	<td class="label">Thông tin cơ bản </td>
                	<td>
                    <?php  echo $this->Form->input('content_en',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.content_en',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>
                <tr>
                	<td class="label">Mô tả sản phẩm</td>
                	<td>
                    <?php  echo $this->Form->input('content',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.content',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>
                <!--<tr>
                	<td class="label">Mô tả sản phẩm </td>
                	<td>
                    <?php  echo $this->Form->input('content',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.content',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>
                <tr>
                	<td class="label">Bản vẽ kỹ thuật </td>
                	<td>
                    <?php  echo $this->Form->input('x1',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.x1',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>
                <tr>
                	<td class="label">Cam kết bán hàng </td>
                	<td>
                    <?php  echo $this->Form->input('x2',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.x2',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>
                <tr>
                	<td class="label">Chính sách bán hàng </td>
                	<td>
                    <?php  echo $this->Form->input('x3',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.x3',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>
                <tr>
                	<td class="label">Tư vấn </td>
                	<td>
                    <?php  echo $this->Form->input('x4',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.x4',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>
                <tr>
                	<td class="label">Mô tả sản phẩm (Anh)</td>
                	<td>
                    <?php  echo $this->Form->input('content_en',array('label' => '','type'=>'textarea')).$this->TvFck->create('Product.content_en',array('toolbar'=>'extra','skin'=>'kama','height'=>'300px','width'=>'700px')); ?>
                    </td>
                </tr>-->
                <tr>
                  	<td class="label">Tiêu đề (SEO):</td>
                    <td>
                    <?php  echo $this->Form->input('title_seo',array('type'=>'textarea','rows' => '2')); ?>
                    </td>
                </tr>
                <tr>
                  	<td class="label">Từ khóa (SEO):</td>
                    <td>
                    <?php  echo $this->Form->input('meta_key',array('type'=>'textarea','rows' => '2')); ?>
                    </td>
                </tr>
                <tr>
                  	<td class="label">Mô tả (SEO):</td>
                    <td>
                    <?php  echo $this->Form->input('meta_des',array('type'=>'textarea','rows' => '2')); ?>
                    </td>
                </tr>
                <tr>
                  	<td class="label">Trạng thái:</td>
                    <td><input type="radio" value="0" id="ProductStatus0" name="data[Product][status]" <?php if($this->data['Product']['status'] == 0 ) echo "checked"; ?>> Chưa Active 
                    	&nbsp;&nbsp;&nbsp;<input type="radio" value="1" id="ProductStatus1" name="data[Product][status]" <?php if($this->data['Product']['status'] == 1 ) echo "checked"; ?>> Đã Active
                    </td>
                </tr>
                
            </table>
            <?php echo $form->input('Product.id',array('label'=>''));?>
            <div class="clr"></div>
        </div> <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
        </div> <!-- End #tab2 -->        
    </div> <!-- End .content-box-content -->
 </div>
<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
			<ul>
				<li id="toolbar-new">
					<a href="javascript:void(0);" onclick="javascript:document.adminForm.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
					</a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.adminForm.reset();">
                    <span class="icon-32-refresh">
                    </span>
                    Reset
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
                    <a href="<?php echo DOMAINAD?>products" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
		<div class="pagetitle icon-48-nhomtin"><h2>Quản lý sản phẩm</h2></div>
		<div class="clr"></div>
	</div>
</div>
<?php echo $form->end(); ?>