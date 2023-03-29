<?php
class GalleryController extends AppController {

	var $name = 'Gallery';
    var $uses=array('Gallery','Album');
	var $helpers = array('Html','Ajax','Javascript');
	function index() {
		mysql_query("SET names utf8");  
    $this->paginate = array('conditions'=>array('Album.status'=>1),'order' => 'Album.id ASC');
    $this->set('album', $this->paginate('Album',array()));

	}
    function gallery($id=null) {

		$this->set('images',$this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1,'Gallery.album_id'=>$id),'order'=>'Gallery.id DESC')));
        $this->set('album',$this->Album->read(null,$id));
        $this->paginate = array('conditions'=>array('Album.status'=>1,'Album.id <>'=>$id),'order'=>'Album.id DESC','limit'=>16);
	    $this->set('albums', $this->paginate('Album',array()));	
	}
  

}
?>
