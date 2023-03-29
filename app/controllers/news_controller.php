<?php
class NewsController extends AppController {

	var $name = 'News';
	var $uses=array('News','Category','User','Setting');
    
    
	function index() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>156),'limit' => '5','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
    
  function tintucnoibat(){    
        mysql_query("SET names utf8");        
        $this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>221),'limit' => '6','order' => 'News.id DESC');
        $this->set('news', $this->paginate('News',array()));
     
    }
	function promotion() {//list danh sach tin khuyen mai			
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>222),'limit' => '6','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
	function danceclass() {//list danh sach tin khuyen mai			
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>223),'limit' => '6','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
	function listnews($id=null) {
	$name=str_replace( '.html', '', $id );         
	    $id=$this->Category->find('list',array('conditions'=>array('Category.alias'=>$name),'fields' => array('Category.id')));
        $id=array_values($id); 
          
       $id=$id[0];
	 $check=$this->Category->find('list',array('conditions'=>array('Category.parent_id'=>$id),'fields' => array('Category.id')));		
        //var_dump($check); exit();
	    if($check!=null){
	       $this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>$check),'order'=>'News.modified DESC','limit'=>10);
            $this->set('listnews', $this->paginate('News',array()));
            $this->set('cat',$this->Category->read(null,$id));
            
            }else{
                $a=$this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$id),'fields' => array('News.id')));
            if(!empty($a))
                {
                    $idnews = (int)$a[0]['News']['id'];
                    $b=count($a);
                    if($b==1){
                        $name=$this->Category->read(null,$id);
                        echo '<script language="javascript" type="text/javascript"> window.location.replace("'.DOMAIN.'chi-tiet/'.$idnews.'/'.$name['Category']['alias'].'.html"); </script>';    
                    }else{
                        $this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>$id),'order'=>'News.modified DESC','limit'=>10);
            	      $this->set('listnews', $this->paginate('News',array()));	
            		  $this->set('cat',$this->Category->read(null,$id));
    
                    }
                }else{
    
                        $this->set('listnews', null);	
    
            		  $this->set('cat',$this->Category->read(null,$id));
    
                }  
            }     
	}
	function souvenir() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>213),'limit' => '5','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
	function recruitment(){
		//list danh sach tin tuc
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>220),'limit' => '5','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
	function services(){
		//list danh sach tin tuc
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>227),'limit' => '7','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
    function dichvu(){
		//list danh sach tin tuc
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>224),'limit' => '7','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
    function ticket(){
		//list danh sach ve may bay
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>214),'limit' => '8','order' => 'News.id DESC');
	    $this->set('ticket', $this->paginate('News',array()));
	}
    function hotel(){
		//list danh sach khach san
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>215),'limit' => '8','order' => 'News.id DESC');
	    $this->set('hotel', $this->paginate('News',array()));
	}
    function car(){
		//list danh sach xe du lich
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>216),'limit' => '8','order' => 'News.id DESC');
	    $this->set('car', $this->paginate('News',array()));
	}
    function visa(){
		//list danh sach ho chieu
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>217),'limit' => '8','order' => 'News.id DESC');
	    $this->set('visa', $this->paginate('News',array()));
	}
	function capacity() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");		
		$news=$this->Category->find('list',array('conditions'=>array('Category.parent_id'=>171 ),'fields' => array('Category.id')));
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>$news),'limit' => '8','order' => 'News.id DESC');
	    $this->set('capacity', $this->paginate('News',array()));
	}
	function addview($id=null) {
		  //var_dump($this->data);die;
		 $data=$this->News->read(null,$_POST['id']);
		 $data['News']['view']= $data['News']['view']+1;
		 $this->News->save($data['News']);
	}
	function view1($id=null) {
			mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>$id),'limit' => '1','order' => 'News.id DESC');
	    $this->set('recruitment', $this->paginate('News',array()));
		 $this->set('cat',$this->Category->read(null,$id));
		}
		
		
		
	function view($id=null) {
		mysql_query("SET names utf8");
		
		if (!$id) {
			$this->Session->setFlash(__('Không tồn tại', true));
			$this->redirect(array('action' => 'index'));
		}
		$name=str_replace( '.html', '', $id );         
	    $id=$this->News->find('list',array('conditions'=>array('News.alias'=>$name),'fields' => array('News.id')));
        $id=array_values($id); 
          
        $id=$id[0];
		$x=$this->News->read(null, $id);
		$this->set('views',$x);
		$this->set('list_other', $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$x['News']['category_id'],'News.id <>'=>$id),'limit'=>10)));
		
	}
	
	function search($name_search=null){
		mysql_query("SET names utf8");
		$title = $_POST['name_search'];
		$this->set('listsearch',$this->News->find('all',array('conditions'=>array('News.status'=>1,'News.title LIKE'=>'%'.$title.'%'),'order'=>'News.id DESC','limit'=>7)));	
	}
    	function thongtin() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");		
		$x=$this->Setting->read(null, 1);
		$this->set('views',$x);
	}
	
	
}
?>
