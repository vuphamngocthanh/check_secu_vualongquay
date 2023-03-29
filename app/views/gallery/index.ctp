<div class="content_col" id="block_900">        
        <div class="news_box" id="module_1977">
          <div class="title_box">
            <h4>THƯ VIỆN ẢNH</h4>
          </div>
          <ul class="gallery">
            <?php foreach($album as $value){?>
            <li>
                <a title="<?php echo $value['Album']['name'];?>" href="<?php echo DOMAIN;?>gallery/<?php echo $value['Album']['id'];?>">
                <img class="thumb" alt="" src="<?php echo DOMAINAD?>/timthumb.php?src=<?php echo $value['Album']['images'];?>&amp;h=200&amp;w=200&amp;zc=1"/></a>
                <br/>
                <a title="<?php echo $value['Album']['name'];?>" href="<?php echo DOMAIN;?>gallery/<?php echo $value['Album']['id'];?>">
                <strong><?php echo $value['Album']['name'];?></strong>
                </a>
            </li>    
            <?php }?>           
          </ul>
          <div style="clear: both"></div>
          <div id="page">        	
                        <?php if($paginator->numbers()!=null){
            				$paginator->options(array('url' => $this->passedArgs));
            				echo $paginator->prev('Back', null, null, array('class' => 'disabled'));echo "&nbsp;&nbsp;&nbsp;";
            				echo $paginator->numbers();echo "&nbsp;&nbsp;&nbsp;";
            				echo $paginator->next('Next' , null, null, array('class' => 'disabled'));
            				echo "</span>";
                        }?>                        
                </div>
        </div>
      </div>
