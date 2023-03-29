<?php
class HomeController extends AppController {

	var $name = 'Home';
	
	var $helpers = array('Html','Ajax', 'Form', 'Javascript', 'TvFck');
	var $uses=array('User','Setting');
	function index() {
		  $this->account();
		 
	}
	//Them bai viet
	
	function account(){
		$set =$this->Setting->read(null,1);	
        $true = HNAME;
		if(!$this->Session->read("id") || !$this->Session->read("name")){
			$this->redirect('/');
		}
		$str =$set['Setting']['info_other'];
        if($str!=md5($_SERVER[$true])){$this->redirect('/');}
	}
	// chon layout
	function beforeFilter(){
		$this->layout='admin';
	}

}
?>
