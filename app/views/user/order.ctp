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
</style> 
<style>
.cart td th{
    border:1px solid gray !important;
    padding: 3px;
}
  #goi-thieu h1,h2,h3{
	  font-size:12px;
	  font-weight:normal;
	  }
	table {
    border: 0 none;
    border-spacing: 0;
}
#input{
	width:236px;
	border: 1px solid #a0b581;
	height:22px;
	font-weight:normal;
	margin-left:20px;
	}
.guimail textarea{
	width:336px;
	height:102px;
	font-weight:normal;
	border: 1px solid #ccc;
	}

.guimail {
   
    font-weight: bold;
    margin-bottom: 40px;
   
    width: 100%;
}
	.tblGrid tr td,.tblGrid tr th {
	border: 1px solid #ccc;
	padding:5px;
    border-spacing: 0;
}
.guimail tr td{
	padding-top:10px;
	}
.bgLLGray th {
    color: #817F80;
    padding-right: 10px;
    text-align: right;
}
.guimail .blue{
	color:blue;
}

</style>

<div id="block_590" class="content_col">
  <div id="module_1081" class="news_box">
    <div class="title_box">
      <h4>Nhật ký đặt hàng</h4>
    </div>
             <table class="tblGrid cart" >
                    <tr class="top">
                        <th width="20">STT</th>
                        <th width="100">Hình ảnh</th>
                        <th width="200">Tên sản phẩm</th>
                        
                        <th width="50">Số lượng</th>
                        <th width="100">Giá</th>
                        <th width="100">Giá</th>
                    </tr>
                    <?php $i=1; $total=0; foreach($infomations as $key=>$product) {?>                  
                    <tr> 
                        <td align=""><?php echo $i;?></td>      
                        <td align="center"><img width="70" src="<?php echo DOMAINAD;?><?php echo $product['Infomationdetail']['images']; ?>" /></td>
                        <td><?php echo $product['Infomationdetail']['name']; ?></td>
                        
                        <td align="center"><?php echo $product['Infomationdetail']['quantity']; ?> </td>
                        <td align="center"><font color="red"><?php echo number_format($product['Infomationdetail']['price'],0); ?></font></td>
                        <td align="center"><font color="red"><?php echo number_format($product['Infomationdetail']['price']*$product['Infomationdetail']['quantity'],0); ?></font></td>
                    </tr>
                    <?php $total += $product['Infomationdetail']['price']; $i++;}
                   		
                    	echo '<tr><td align="right" colspan="6"><b>Tổng giá sản phẩm:</b> <font color="red">'.number_format($total,0).' VNĐ </font></td></tr>';
                    ?> 
                </table>
		     
            <br/>
           

          </div>
                </div>                  
