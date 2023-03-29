<div id="khung">
	<div id="main">
		<div class="toolbar-list" id="toolbar">
                    <ul>
                        <li id="toolbar-new">
                            <a href="<?php echo DOMAINAD?>contacts/add" class="toolbar">
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
        <div class="pagetitle icon-48-nhomtin"><h2>Quản lý liên hệ đặt chỗ</h2></div>
		<div class="clr"></div>
	</div>
</div>
<div class="content-box">
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
            <table>
        
            	<thead>
                    <tr>
                       <th width="1%"><input class="check-all" type="checkbox" /></th>
                       <th width="7%">STT</th>
                       <th><?php echo $this->Paginator->sort('Tiêu đề','title');?></th>
                       <th>Họ tên</th>
                       <th><?php echo $this->Paginator->sort('Cập nhật','modified');?></th>
                       <th>Xử lý</th>
                       <th width="3%"><?php echo $this->Paginator->sort('ID','id');?></th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <td colspan="6">                            
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
                   <?php  foreach ($contacts as $key =>$value){?>
                    <tr>
                        <td><input type="checkbox" name="<?php echo $value['Contact']['id'] ?>"  /></td>
                        <td><?php $j=$key+1; echo $j;?></td>
                        <td><a href="<?php echo DOMAINAD?>contacts/view/<?php echo $value['Contact']['id']?>" title="Edit"><?php echo $value['Contact']['title']; ?></a></td>
                        <td><?php  echo $value['Contact']['name'];?></td>
                        <td><?php echo date('d-m-Y', strtotime($value['Contact']['modified'])); ?></td>
                        <td>                             
                             <a href="javascript:confirmDelete('<?php echo DOMAINAD?>contacts/delete/<?php echo $value['Contact']['id'] ?>')" title="Delete"><img src="<?php echo DOMAINAD?>images/icons/cross.png" alt="Delete" /></a>                        
                        </td>
                        <td align="right"><?php echo $value['Contact']['id'];?></td>
                    </tr>
                   <?php }?>
                </tbody>                
            </table>
        </div> <!-- End #tab1 -->
        <!-- End #tab2 -->        
    </div> <!-- End .content-box-content -->
 </div>