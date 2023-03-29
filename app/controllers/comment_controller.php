<?php
class CommentController extends AppController {

	var $name = 'Comment';
	var $uses=array('Category','News','Menu','Infomation','Gallery','Album','Banner','Helps','Setting','Video','Slideshow','Partner','Advertisement','Catproduct','Product','Weblink','Manufacturer');
	
  function getOrder(){
		mysql_query("SET names utf8");      	
		return $this->Infomation->find('all',array('order' => 'Infomation.id DESC'));
	}
  function getAlbum(){
		mysql_query("SET names utf8");      	
		return $this->Album->find('all',array('conditions'=>array('Album.status'=>1),'limit' => '3','order' => 'Album.id ASC'));
	}
     function menu(){
		mysql_query("SET names utf8");
		return $this->Menu->find('all',array('conditions'=>array('Menu.status'=>1,'Menu.parent_id'=>null),'order'=>'Menu.order ASC'));
	}
    function rootmenu($id=null){
		mysql_query("SET names utf8");
		return $this->Menu->find('all',array('conditions'=>array('Menu.status'=>1,'Menu.parent_id'=>$id),'order'=>'Menu.order ASC'));
	}
    function homeproduct($id=null){  
        mysql_query("SET names utf8");
        $cat =$this->Catproduct->read(null,$id);
        $this->set('cat',$cat); 
        $check = $this->Catproduct->find('list',array('conditions'=>array('Catproduct.lft >='=>$cat['Catproduct']['lft'],'Catproduct.rght <='=>$cat['Catproduct']['rght']),'fields'=>array('Catproduct.id')));                
	    if($check!=null){
	    
                return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$check),'order'=>'Product.modified DESC','limit'=>8));
        }else{
            return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.modified DESC','limit'=>8));
        }               
	}
    function kmproduct($id=null){  
        mysql_query("SET names utf8");
        $cat =$this->Catproduct->read(null,$id);
        $this->set('cat',$cat); 
        $check = $this->Catproduct->find('list',array('conditions'=>array('Catproduct.lft >='=>$cat['Catproduct']['lft'],'Catproduct.rght <='=>$cat['Catproduct']['rght']),'fields'=>array('Catproduct.id')));                
	    if($check!=null){
	    
                return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$check),'order'=>'Product.char ASC','limit'=>8));
        }else{
            return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.char ASC','limit'=>8));
        }               
	}
    function dmuc(){
		mysql_query("SET names utf8");
        $list_cat = $this->Catproduct->generatetreelist(null,null,null," _ ");
        return $this->set(compact('list_cat'));
	}
    function category(){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>null,'NOT'=>array('Category.id'=>146)),'order'=>'Category.tt ASC'));
	}
    function categoryid($id=null){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>$id),'order'=>'Category.tt ASC'));
	}
	//tin tuc
    function menucategory(){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>null),'order'=>'Category.tt ASC'));
	}
    function showcategory($id=null){
        mysql_query("SET names utf8");
		return $this->Category-> find('all',array('conditions'=>array('Category.parent_id '=>$id),'order'=>'Category.tt ASC'));
	}
	function menunews1(){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>'156'),'order'=>'Category.tt DESC'));
	}
    
	// gioi thieu
	function menuintroduct(){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>'146'),'order'=>'Category.tt ASC'));
	}
	function banner(){
		return $this->Banner->find('all',array('conditions'=>array('Banner.status'=>1),'order'=>'Banner.id DESC'));
	}
	
	function setting(){
		return $this->Setting->find('all',array('conditions'=>array(),'order'=>'Setting.id DESC'));
	}
	function adv(){
		//return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
		return $this->Banner->find('all',array('conditions'=>array('Banner.status'=>1),'order'=>'Banner.id DESC','limit'=>2));
	}
	function doitac(){
		//return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
		return $this->Partner->find('all',array('conditions'=>array('Partner.status'=>1),'order'=>'Partner.id DESC'));
	}
	function menu_active(){
		return $this->Category2->find('all',array('conditions'=>array('Category2.parent_id'=>145),'order'=>'Category2.id ASC'));
	}
	function helpsonline(){
	return $this->Helps->find('all',array('conditions'=>array('Helps.status'=>1),'order'=>'Helps.id DESC'));
	}
	function id_product($id){
	return $this->Product->read(null,$id);
	//pr($this->Product->read(null,$id));die;
	}
    function gia(){
        $gia = array('0'=>'0 đến 1 triệu','1'=>'1 đến 2 triệu','2'=>'2 đến 3 triệu','4'=>'3 đến 4 triệu','5'=>'4 đến 5 triệu','6'=>'5 đến 6 triệu','7'=>'6 đến 7 triệu','8'=>'7 đến 8 triệu','9'=>'8 đến 9 triệu','10'=>'Trên 10 triệu');
        return $this->set(compact('gia'));
		
	}
    function tuvan(){
	return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>235),'order'=>'News.id DESC','limit'=>1));	
	}
    
    function hotnew(){
	return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>232),'order'=>'News.id DESC','limit'=>3));	
	}
	function getinfo($cat=null){
	return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$cat),'order'=>'News.id DESC','limit'=>3));	
	}
	function videos(){
		mysql_query("SET names utf8");
		return $this->Video->find('all',array('conditions'=>array('Video.status'=>1,'Video.left'=>0),'order'=>'Video.id DESC','limit'=>1));
	}
    function videosright(){
		mysql_query("SET names utf8");
		return $this->Video->find('all',array('conditions'=>array('Video.status'=>1,'Video.left'=>1),'order'=>'Video.id DESC','limit'=>1));
	}
	function tintuc(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>156),'order'=>'News.id DESC','limit'=>5));
	}
	
	function slideshow(){
		mysql_query("SET names utf8");
		return $this->Slideshow->find('all',array('conditions'=>array('Slideshow.status'=>1),'order'=>'Slideshow.id DESC'));
	}
	function library_image(){
		return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>10));
	}
	function shows(){
	mysql_query("SET names utf8");
	 return $this->Category->find('all',array('conditions'=>array('Category.parent_id'=>'201'),'order'=>'Category.id ASC'));
	}
	// SẢN PHẨM
	function menuproduct(){
	mysql_query("SET names utf8");
	 return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.parent_id'=>'3'),'order'=>'Catproduct.id ASC'));
	}
	
	function submenuproduct($id=null){
		return $this->Catproduct-> find('all',array('conditions'=>array('Catproduct.parent_id '=>$id),'order'=>'Catproduct.id ASC'));
	}
    
    function showsmenu(){
	mysql_query("SET names utf8");
	 return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.parent_id'=>'12'),'order'=>'Catproduct.id ASC'));
	}
	
	function showsmenu1($id=null){
		return $this->Catproduct-> find('all',array('conditions'=>array('Catproduct.parent_id '=>$id),'order'=>'Catproduct.char ASC'));
	}
	function showsmenu2($id=null){
		return $this->Catproduct-> find('all',array('conditions'=>array('Catproduct.parent_id '=>$id),'order'=>'Catproduct.id ASC'));
	}
	
	function danhmuc(){
 	 	return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>null),'order'=>'Catproduct.char ASC'));
 	}
    function danhmuccon(){
 	 	return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>234),'order'=>'Catproduct.char ASC'));
 	}
	function typical(){
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>1),'order'=>'Product.id DESC','limit'=>10));
	}
    function productnew(){
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>1),'order'=>'Product.id DESC','limit'=>10));
	}
    function khuyenmai(){
        return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.spkuyenmai'=>1),'limit'=>5,'order' => 'Product.modified DESC'));		
	}
    function sptieubieu(){
        return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.sptieubieu'=>1),'limit'=>8,'order' => 'Product.modified DESC'));		
	}
    function spquantam(){
        return $this->Product->find('all',array('conditions'=>array('Product.status'=>1),'limit'=>4,'order' => 'Product.numvote DESC'));		
	}
	function business(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>218),'order'=>'News.id DESC','limit'=>5));
	}
	function customers(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>219),'order'=>'News.id DESC','limit'=>5));
	}
	function science(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>220),'order'=>'News.id DESC','limit'=>5));
	}
    function help(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>156),'order'=>'News.id DESC','limit'=>8));
	}
    function tinkhuyenmai(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>227),'order'=>'News.id DESC','limit'=>5));
	}
    function tinkhuyenmaile(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>228),'order'=>'News.id DESC','limit'=>5));
	}
    function weblink(){
		return $this->Weblink->find('all',array('conditions'=>array('Weblink.status'=>1),'order'=>'Weblink.id DESC'));
	}
    function cat(){
		return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.status'=>1)));
	}
    function hsx(){
		return $this->Manufacturer->find('all',array('conditions'=>array('Manufacturer.status'=>1,'Manufacturer.parent_id '=>null)));
	}
    function catcon(){
		return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.status'=>1)));
	}
    function adv1(){
		return $this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1,'Advertisement.display'=>0),'order'=>'Advertisement.id ASC','limit'=>3));
	}
    function adv2(){
		return $this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1,'Advertisement.display'=>1),'order'=>'Advertisement.id ASC','limit'=>3));
	}
    function advf(){
		return $this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1,'Advertisement.display'=>2),'order'=>'Advertisement.id ASC','limit'=>3));
	}
     function advr(){
		return $this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1,'Advertisement.display'=>3),'order'=>'Advertisement.id ASC'));
	}
}

?>