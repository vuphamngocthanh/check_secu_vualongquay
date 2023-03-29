<!--search-->
      <div class="box-search">
        <form action="<?php echo DOMAIN;?>products/search" method="post">
          <p class="inputname-tk">
            <input name="name_search" id="search" type="text" style="width:130px; height: 14px;" value=" "/>
          </p>
          <p class="boxselectsearch">
              <select style="width:150px; " class="spm-text" name="gia">
		        <option value="">----- Khoảng giá ----- </option>
                <option value="0">0 đến 1 triệu</option>
                <option value="1">1 đến 2 triệu</option>
                <option value="2">2 đến 3 triệu</option>
                <option value="4">3 đến 4 triệu</option>
                <option value="5">4 đến 5 triệu</option>
                <option value="6">5 đến 6 triệu</option>
                <option value="7">6 đến 7 triệu</option>
                <option value="8">7 đến 8 triệu</option>
                <option value="9">8 đến 9 triệu</option>
                <option value="10">Trên 10 triệu</option>
                </select>
          </p>
        
          <p class="boxselectsearch">
            <select name="dm" style="width:200px; ">
              <option value="">---------------- Danh mục ----------------</option>
              <?php $danhmuccon = $this->requestAction('/comment/danhmuccon') ?>
                <?php foreach($danhmuccon as $value){  ?>
                  <option value="<?php echo $value['Catproduct']['id'];?>">+ <?php echo $value['Catproduct']['name'];?></option>
                        <?php $catpro = $this->requestAction('/comment/showsmenu1/'.$value['Catproduct']['id']);?>
                        <?php foreach($catpro as $values){?>
                        <option value="<?php echo $values['Catproduct']['id'];?>">__<?php echo $values['Catproduct']['name'];?></option>
                        <?php }?>
                  <?php }?>
            </select>
          </p>
          <p class="boxselectsearch">
            <select name="hsx">
                <option value="">---- Hãng sản xuất ----</option>
                <?php $hsx = $this->requestAction('/comment/hsx') ?>
                <?php foreach($hsx as $value){  ?>
                <option value="<?php echo $value['Manufacturer']['id'];?>">+ <?php echo $value['Manufacturer']['name'];?></option>
                <?php }?>
            </select>
          </p>
          <p class="boxselectsearch">
            <input name="" type="submit" class="cs-buttom-searcg" value="Tìm kiếm" style="cursor:pointer"/>
          </p></form>
        
          <p class="box-giohangsearch"><a href="<?php echo DOMAIN;?>xem-gio-hang.html"> <strong><?php if(isset($_SESSION['shopingcart'])){ $sl=count($_SESSION['shopingcart']); echo $sl;}else{ echo "0";}?></strong> sản phẩm</a></p>
        
      </div>
      <!--End search-->