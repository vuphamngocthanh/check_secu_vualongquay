<?php echo $form->create(null, array( 'url' => DOMAINAD.'banners/edit','type' => 'post','enctype'=>'multipart/form-data','name'=>'image')); ?>  
<br />  
<?php
	//echo $this->Html->script(array('ckeditor/ckeditor','ckfinder/ckfinder'));
?>
<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
			<ul>
				<li id="toolbar-new">
					<a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
					</a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();">
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
                    <a href="<?php echo DOMAINAD?>banners" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
		<div class="pagetitle icon-48-category-add"><h2>Quản lý Logo</h2></div>
		<div class="clr"></div>
	</div>
</div>
<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">
        <h3> Quản lý Logo </h3>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Quản lý Logo</a></li> <!-- href must be unique and match the id of target div -->
        </ul>
        <div class="clear"></div>
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        	<table class="input">
               	<tr>
                   	<td width="120" class="label">Tên:</td>
                    <td>
                    <?php echo $this->Form->input('Banner.name',array('class'=>'text-input medium-input datepicker','maxlength' => '250','onchange' => 'get_alias()','id' => 'idtitle'));?>
                     <?php echo $this->Form->input('Banner.id',array());?>
                    </td>
                </tr>
             
                <tr>
                  	<td class="label">Hình ảnh Logo:</td>
                    <td>
                        <input type="text" size="50" style="height:25px;"  value="<?php echo $edit['Banner']['images']?>" name="userfile" readonly="true"> &nbsp;<a href="javascript:window.open('<?php echo DOMAINAD; ?>gallery.php','userfile','width=500,height=300');window.history.go(1)" ><input type="button" value="Chọn ảnh" class="button" /></a>
                    </td>
                </tr>
             <tr>
                  	<td class="label">Trang thái:</td>
                    <td>
                    <input type="radio" value="0" id="BannerStatus0" name="data[Banner][status]"> Chưa Active 
                    	&nbsp;&nbsp;&nbsp;<input type="radio" checked="checked" value="1" id="BannerStatus1" name="data[Banner][status]"> Đã Active
                    </td>
                </tr>
               
            </table>
			<div class="clear"></div>
        </div> <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
			<div class="clear"></div><!-- End .clear -->
        </div> <!-- End #tab2 -->        
    </div> <!-- End .content-box-content -->
 </div>
 
<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
			<ul>
				<li id="toolbar-new">
					<a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="toolbar">
                        <span class="icon-32-save"></span>
                        Lưu
					</a>
                </li>
                <li id="toolbar-refresh">
                    <a href="javascript:void(0);" class="toolbar" onclick="javascript:document.image.reset();">
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
                    <a href="<?php echo DOMAINAD?>banners" class="toolbar">
                        <span class="icon-32-cancel"></span>
                        Hủy
                    </a>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
		<div class="pagetitle icon-48-category-add"><h2>Quản lý banner</h2></div>

		<div class="clr"></div>
	</div>
</div>
<?php echo $form->end(); ?>