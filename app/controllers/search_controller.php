<?php
class SearchController extends AppController {

	var $name = 'Search';
	var $uses=array('Product','Catproduct');
	function search($title=null) {
		//list danh sach tin tuc
		mysql_query("SET names utf8");		

		$id = $this->Product->find('list',array('conditions'=>array('Product.alias '=>$title),'fields'=>array('Product.id')));
		
		$this->set('views', $this->Product->read(null, $id));

		$this->set('news', $this->Catproduct->read(null, $id));

		$name=$this->Product->read(null, $id);       

  		$this->set('views',$name);		

        $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$name['Product']['catproduct_id'],'Product.id <>'=>$name['Product']['id']),'order'=>'Product.id DESC','limit'=>8);

	    $this->set('sanphamkhac', $this->paginate('Product',array()));

        

        $product=$this->Product->read(null,$id);
		
		//$this->set('products',$this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.title like'=>'%'.$title.' %'),'order'=>'Product.id DESC')));
	}
	
}
?>
